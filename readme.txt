=== Sourei TEC - Datalayer For Elementor ===
Contributors: otaviodeveloper, sourei
Tags: woocommerce, elementor, datalayer, formsubmit, google tag manager
Stable tag: 1.0.0
Requires at least: 5.0
Tested up to: 5.9.3
Requires PHP: 7.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


Integration between the Elementor Forms and Datalayer

== Description ==

When filling out and submitting an Elementor form, all form fields are sent to the dataLayer, following the following model:

{
    "event": "formSubmitDLFSE",
    "fields": {
        "nome": {
            "id": "nome",
            "type": "text",
            "title": "Nome",
            "value": "Name Example",
            "raw_value": "Name Example",
            "required": true
        },
        "telefone": {
            "id": "telefone",
            "type": "text",
            "title": "Telefone",
            "value": "(99) 99999-9999",
            "raw_value": "(99) 99999-9999",
            "required": true
        },
        "email": {
            "id": "email",
            "type": "email",
            "title": "Email",
            "value": "example@sourei.com.br",
            "raw_value": "example@sourei.com.br",
            "required": true
        },
        "cidade": {
            "id": "cidade",
            "type": "text",
            "title": "Cidade",
            "value": "Varginha",
            "raw_value": "Varginha",
            "required": true
        },
        "servico": {
            "id": "servico",
            "type": "checkbox",
            "title": "Serviços interessado",
            "value": "Digitalização",
            "raw_value": [
                "Digitalização"
            ],
            "required": false
        }
    },
    "gtm.uniqueEventId": 21
}

== Integrated Services ==

- Wordpress
- Woocommerce
- Elementor
- Google Tag Manager


= Instalation: =

- Upload the plugin files to the wp-content/plugins folder, or install using the WordPress plugin installer.
- Activate the plugin.

= Compatibility: =

Requires Elementor 3.0 or later.

== Changelog ==

= 1.0 - 2022/05/05 =












=== Sourei TEC - Datalayer For Form Submit Elementor ===
Contributors: otaviocefet
Tags: woocommerce, elementor, datalayer, formsubmit
Requires at least: 5.0
Tested up to: 5.9.3
Requires PHP: 7.4


Integration between the Elementor Forms and Datalayer

== Description ==

Ao preenchimento e envio de um formulário do Elementor, todos os campos do formulário são enviados para um dataLayer, seguindo o seguinte modelo:

{
    "event": "formSubmitDLFSE",
    "fields": {
        "nome": {
            "id": "nome",
            "type": "text",
            "title": "Nome",
            "value": "Name Example",
            "raw_value": "Name Example",
            "required": true
        },
        "telefone": {
            "id": "telefone",
            "type": "text",
            "title": "Telefone",
            "value": "(99) 99999-9999",
            "raw_value": "(99) 99999-9999",
            "required": true
        },
        "email": {
            "id": "email",
            "type": "email",
            "title": "Email",
            "value": "example@sourei.com.br",
            "raw_value": "example@sourei.com.br",
            "required": true
        },
        "cidade": {
            "id": "cidade",
            "type": "text",
            "title": "Cidade",
            "value": "Varginha",
            "raw_value": "Varginha",
            "required": true
        },
        "servico": {
            "id": "servico",
            "type": "checkbox",
            "title": "Serviços interessado",
            "value": "Digitalização",
            "raw_value": [
                "Digitalização"
            ],
            "required": false
        }
    },
    "gtm.uniqueEventId": 21
}

== Integrated Services ==

- Wordpress
- Woocommerce
- Elementor
- Google Tag Manager


= Instalation: =

- Upload the plugin files to the wp-content/plugins folder, or install using the WordPress plugin installer.
- Ative o plugin.

= Compatibility: =

Requer Elementor 3.0 ou posterior.

== Changelog ==

= 1.0 - 2022/05/05 =
