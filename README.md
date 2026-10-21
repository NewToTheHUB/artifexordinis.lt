# artifexordinis.lt

Artifex Ordinis svetainė — „Tvarka, kuri dirba už jus.“

- Statinis PHP (be karkaso), dizainas pagal φ (1,618) sistemą, šviesus ir tamsus režimas pagal naršyklę.
- `inc/` — bendras karkasas, turinys (`content.php`), užimtumas iš Superhuman Docs (`talpa.php`).
- `uzklausa.php` — užklausos forma → Superhuman Docs webhook + el. laiškas.
- `llms.txt`, JSON-LD, Markdown versija (`Accept: text/markdown`), WebMCP formos atributai — AI agentams.
- Slapti nustatymai **ne repozitorijoje**: serveryje `domains/artifexordinis.lt/private/config.php` (šablonas — `setup/config.example.php`).

Diegimas: Hostinger traukia `main` šaką į `public_html`.
