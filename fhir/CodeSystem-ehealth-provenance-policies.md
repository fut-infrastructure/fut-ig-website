# Policies for provenances - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Policies for provenances**

## CodeSystem: Policies for provenances 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/ehealth-provenance-policies | *Version*:6.0.0 |
| Active as of 2021-02-24 | *Computable Name*:Policies for provenances |

 
Policies under which data can be provided 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Policies for provenances](ValueSet-ehealth-provenance-policies.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-provenance-policies",
  "url" : "http://ehealth.sundhed.dk/cs/ehealth-provenance-policies",
  "version" : "6.0.0",
  "name" : "Policies for provenances",
  "title" : "Policies for provenances",
  "status" : "active",
  "experimental" : false,
  "date" : "2021-02-24T00:00:00+00:00",
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
  "description" : "Policies under which data can be provided",
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
  "concept" : [
    {
      "code" : "healthcare-act",
      "display" : "Danish healthcare act",
      "designation" : [
        {
          "language" : "en-US",
          "value" : "Danish healthcare act"
        },
        {
          "language" : "da",
          "value" : "Sundhedsloven"
        }
      ]
    },
    {
      "code" : "service-act",
      "display" : "Danish service act",
      "designation" : [
        {
          "language" : "en-US",
          "value" : "Danish service act"
        },
        {
          "language" : "da",
          "value" : "Serviceloven"
        }
      ]
    },
    {
      "code" : "http://ehealth.sundhed.dk/policy/ehealth/coherent-submitted-measurement",
      "display" : "Coherent submitted measurement",
      "designation" : [
        {
          "language" : "en-US",
          "value" : "Coherent submitted measurement"
        },
        {
          "language" : "da",
          "value" : "Målinger indsendt sammen"
        }
      ]
    },
    {
      "code" : "http://ehealth.sundhed.dk/policy/ehealth/measurement-reuse",
      "display" : "Measurement reuse",
      "designation" : [
        {
          "language" : "en-US",
          "value" : "Measurement reuse"
        },
        {
          "language" : "da",
          "value" : "Genbrugte måledata"
        }
      ]
    },
    {
      "code" : "http://ehealth.sundhed.dk/policy/ehealth/organization-administration",
      "display" : "Organization administration",
      "designation" : [
        {
          "language" : "en-US",
          "value" : "Organization administration"
        },
        {
          "language" : "da",
          "value" : "Administrering af organisationsoplysninger"
        }
      ]
    },
    {
      "code" : "http://ehealth.sundhed.dk/policy/dk/sundhedsloven",
      "display" : "Danish healthcare act",
      "designation" : [
        {
          "language" : "en-US",
          "value" : "Danish healthcare act"
        },
        {
          "language" : "da",
          "value" : "Sundhedsloven"
        }
      ]
    },
    {
      "code" : "http://ehealth.sundhed.dk/policy/dk/serviceloven",
      "display" : "Danish service act",
      "designation" : [
        {
          "language" : "en-US",
          "value" : "Danish service act"
        },
        {
          "language" : "da",
          "value" : "Serviceloven"
        }
      ]
    },
    {
      "code" : "http://ehealth.sundhed.dk/policy/dk/persondataloven",
      "display" : "Person Data",
      "designation" : [
        {
          "language" : "en-US",
          "value" : "Person Data"
        },
        {
          "language" : "da",
          "value" : "Oplysninger underlagt Persondataloven"
        }
      ]
    },
    {
      "code" : "http://ehealth.sundhed.dk/policy/eu/general-data-protection-regulation",
      "display" : "General Data Protection Regulation",
      "designation" : [
        {
          "language" : "en-US",
          "value" : "General Data Protection Regulation"
        },
        {
          "language" : "da",
          "value" : "GDPR data"
        }
      ]
    },
    {
      "code" : "http://ehealth.sundhed.dk/policy/ehealth/reuse-of-measurement-chosen-by-citizen",
      "display" : "Reuse of measurement chosen by citizen",
      "designation" : [
        {
          "language" : "en-US",
          "value" : "Reuse of measurement chosen by citizen"
        }
      ]
    }
  ]
}

```
