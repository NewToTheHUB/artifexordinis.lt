# artifexordinis.lt

Artifex Ordinis svetainė — „Tvarka, kuri dirba jums.“

- Statinis PHP (be karkaso), dizainas pagal φ (1,618) sistemą, šviesus ir tamsus režimas pagal naršyklę.
- `inc/` — bendras karkasas, užimtumas iš Superhuman Docs (`talpa.php`).
- `inc/lang/lt.php`, `inc/lang/en.php` — visi tekstai. Abu failai turi tuos pačius raktus: keičiant tekstą, keisti abu.
- `inc/pages/` — bendri šablonai abiem kalboms: `home.php`, `kainos.php`, `pavyzdziai.php`, `duk.php`, `parts.php` (pavyzdžio kortelė).
- Pavyzdžio `embed` laukas (`inc/lang/*.php`) — Superhuman Docs įterpimo nuoroda; tuščias = rodoma tik nuoroda „Išbandyti“.
- `/en/` — angliška kopija (`/en/pricing/`, `/en/examples/`, `/en/faq/`, `/en/about/`, `/en/privacy/`). Kalbą nustato `define('AO_LANG', 'en')`.
- `config.php` raktas `calc_embed_url` — viešai paskelbtos Tvarkos skaičiuoklės nuoroda `/kainos/` puslapiui.
- `uzklausa.php` — užklausos forma → Superhuman Docs webhook + el. laiškas.
- `llms.txt`, JSON-LD, Markdown versija (`Accept: text/markdown`), WebMCP formos atributai — AI agentams.
- Slapti nustatymai **ne repozitorijoje**: serveryje `domains/artifexordinis.lt/private/config.php` (šablonas — `setup/config.example.php`).

Diegimas: Hostinger traukia `main` šaką į `public_html`. Kiekvienas push į `main` per GitHub webhook automatiškai paleidžia diegimą.
