<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex">
    <title>OCR Receipt — Vérification de votre adresse email</title>
    <style>
        *,::after,::before{box-sizing:border-box;margin:0;padding:0}
        body{font-family:Inter,ui-sans-serif,system-ui,sans-serif;background:#0a0a0a;color:#e5e5e5;min-height:100vh;display:flex;align-items:center;justify-content:center}
        .card{max-width:480px;width:100%;margin:2rem;background:#161615;border:1px solid #3e3e3a;border-radius:1rem;box-shadow:0 20px 40px rgba(0,0,0,.5);padding:2.5rem}
        h1{font-family:'Playfair Display',Georgia,serif;font-size:1.5rem;margin-bottom:.5rem;color:#e5e5e5}
        .badge{background:rgba(34,197,94,.1);color:#22c55e;border:1px solid rgba(34,197,94,.2);font-size:10px;font-family:ui-monospace,monospace;font-weight:600;padding:.35rem .75rem;border-radius:999px;display:inline-block;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:.05em}
        p{color:#a1a09a;font-size:.875rem;line-height:1.6;margin-bottom:1.5rem}
        .otp-input{width:100%;background:#0a0a0a;border:1px solid #3e3e3a;border-radius:.75rem;padding:1rem;font-family:ui-monospace,monospace;font-size:1.5rem;letter-spacing:.4em;text-align:center;color:#22c55e;outline:none;margin-bottom:1rem}
        .otp-input:focus{border-color:#22c55e}
        .btn{width:100%;background:#16a34a;color:#fff;font-family:ui-monospace,monospace;font-weight:600;padding:.875rem 1.5rem;border-radius:.75rem;border:none;cursor:pointer;text-transform:uppercase;letter-spacing:.05em;font-size:.8rem;transition:background .2s}
        .btn:hover{background:#22c55e}
        .btn:disabled{opacity:.5;cursor:not-allowed}
        .btn-link{background:transparent;border:none;color:#a1a09a;font-size:.75rem;cursor:pointer;margin-top:1rem;text-decoration:underline;display:block;width:100%;text-align:center}
        .btn-link:hover{color:#e5e5e5}
        .error{color:#ef4444;font-size:.8rem;font-family:ui-monospace,monospace;margin-bottom:1rem;text-align:center}
        .success{color:#22c55e;font-size:.8rem;font-family:ui-monospace,monospace;margin-bottom:1rem;text-align:center}
    </style>
</head>
<body>
    <div class="card">
        <div class="badge">🔒 Sécurité — Vérification Email</div>
        <h1>Vérifiez votre boîte de réception</h1>
        <p>
            Nous avons envoyé un code de vérification à 6 chiffres à <strong>{{ $email }}</strong>.<br>
            Saisissez ce code ci-dessous (valide 15 minutes) pour générer et afficher votre clé de licence perpétuelle.
        </p>

        <div id="msg-error" class="error" style="display:{{ session('error') ? 'block' : 'none' }}">{{ session('error') }}</div>
        <div id="msg-success" class="success" style="display:none"></div>

        <form id="verify-form" onsubmit="submitCode(event)">
            <input type="hidden" id="email" value="{{ $email }}">
            <input type="hidden" id="tier" value="{{ $tier ?? 'pro' }}">
            <input type="hidden" id="session_id" value="{{ $session_id ?? '' }}">
            <input
                type="text"
                id="token"
                class="otp-input"
                maxlength="6"
                pattern="[0-9]{6}"
                placeholder="000000"
                required
                autofocus
            >
            <button type="submit" id="submit-btn" class="btn">Valider et obtenir ma clé</button>
        </form>

        <button type="button" id="resend-btn" class="btn-link" onclick="resendCode()">
            Vous n'avez pas reçu le code ? Renvoyer un nouveau code
        </button>
    </div>

    <script>
        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

        async function submitCode(e) {
            e.preventDefault();
            const btn = document.getElementById('submit-btn');
            const errEl = document.getElementById('msg-error');
            const okEl = document.getElementById('msg-success');
            errEl.style.display = 'none';
            okEl.style.display = 'none';
            btn.disabled = true;

            try {
                const res = await fetch('/api/verify/confirm', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        email: document.getElementById('email').value,
                        token: document.getElementById('token').value,
                        tier: document.getElementById('tier').value,
                        session_id: document.getElementById('session_id').value
                    })
                });
                const data = await res.json();
                if (!res.ok || !data.verified) {
                    throw new Error(data.error || 'Code invalide ou expiré.');
                }
                okEl.textContent = 'Adresse vérifiée ! Redirection vers votre téléchargement...';
                okEl.style.display = 'block';
                if (data.redirect_url) {
                    window.location.href = data.redirect_url;
                }
            } catch (err) {
                errEl.textContent = err.message;
                errEl.style.display = 'block';
            } finally {
                btn.disabled = false;
            }
        }

        async function resendCode() {
            const errEl = document.getElementById('msg-error');
            const okEl = document.getElementById('msg-success');
            errEl.style.display = 'none';
            okEl.style.display = 'none';

            try {
                const res = await fetch('/api/verify/send', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        email: document.getElementById('email').value,
                        tier: document.getElementById('tier').value,
                        session_id: document.getElementById('session_id').value
                    })
                });
                const data = await res.json();
                if (!res.ok) {
                    throw new Error(data.error || 'Impossible de renvoyer le code.');
                }
                okEl.textContent = 'Un nouveau code à 6 chiffres a été envoyé à votre adresse.';
                okEl.style.display = 'block';
            } catch (err) {
                errEl.textContent = err.message;
                errEl.style.display = 'block';
            }
        }
    </script>
</body>
</html>

