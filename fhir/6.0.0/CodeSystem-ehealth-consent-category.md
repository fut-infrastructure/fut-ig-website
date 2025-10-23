# Consent Category - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Consent Category**

## CodeSystem: Consent Category 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/consent-category | *Version*:6.0.0 |
| Active as of 2019-01-29 | *Computable Name*:ConsentCategory |

 
Consent codes 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ConsentCategory](ValueSet-ehealth-consent-category.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-consent-category",
  "url" : "http://ehealth.sundhed.dk/cs/consent-category",
  "version" : "6.0.0",
  "name" : "ConsentCategory",
  "title" : "Consent Category",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-01-29T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [
    {
      "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://ehealth.sundhed.dk"
        }
      ]
    }
  ],
  "description" : "Consent codes",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "DK",
          "display" : "Denmark"
        }
      ]
    }
  ],
  "caseSensitive" : true,
  "content" : "complete",
  "property" : [
    {
      "code" : "deprecated",
      "uri" : "http://hl7.org/fhir/concept-properties#deprecated",
      "description" : "Indicates that the concept is deprecated and should not be used",
      "type" : "dateTime"
    }
  ],
  "concept" : [
    {
      "code" : "TBD",
      "display" : "Example value - Under construction",
      "definition" : "Example value - Under construction",
      "property" : [
        {
          "code" : "deprecated",
          "valueDateTime" : "2020-02-03"
        }
      ]
    },
    {
      "code" : "PITEOC",
      "display" : "Participate in Telemedical EpisodeOfCare",
      "definition" : "Participate in Telemedical EpisodeOfCare",
      "designation" : [
        {
          "language" : "da",
          "value" : "Deltagelse i telemedicinsk forløb"
        }
      ]
    },
    {
      "code" : "SSLPCI",
      "display" : "Forward patient contact information to SSL provider",
      "definition" : "Forward patient contact information to SSL provider",
      "designation" : [
        {
          "language" : "da",
          "value" : "Videregivelse til Service, Support og Logistik-leverandør af patientens adresse og kontaktinformation"
        }
      ]
    }
  ]
}

```
