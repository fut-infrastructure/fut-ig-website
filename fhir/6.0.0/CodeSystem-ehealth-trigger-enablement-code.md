# Trigger Enablement Code - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Trigger Enablement Code**

## CodeSystem: Trigger Enablement Code 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/trigger-enablement-code | *Version*:6.0.0 |
| Active as of 2021-10-22 | *Computable Name*:TriggerEnablementCode |

 
Trigger Enablement Code 

 This Code system is referenced in the content logical definition of the following value sets: 

* [triggerEnablementCode](ValueSet-ehealth-trigger-enablement-code.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-trigger-enablement-code",
  "url" : "http://ehealth.sundhed.dk/cs/trigger-enablement-code",
  "version" : "6.0.0",
  "name" : "TriggerEnablementCode",
  "title" : "Trigger Enablement Code",
  "status" : "active",
  "experimental" : false,
  "date" : "2021-10-22T11:23:00+00:00",
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
  "description" : "Trigger Enablement Code",
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
      "code" : "NO_TRIGGER",
      "display" : "No trigger",
      "definition" : "A trigger has not been set for this serviceRequest",
      "designation" : [
        {
          "language" : "da",
          "value" : "Ingen udløser"
        }
      ]
    },
    {
      "code" : "TRIGGER_ENABLED",
      "display" : "Trigger Enabled",
      "definition" : "A trigger has been enabled for this serviceRequest",
      "designation" : [
        {
          "language" : "da",
          "value" : "Udløser aktiveret"
        }
      ]
    },
    {
      "code" : "TRIGGER_DISABLED",
      "display" : "Trigger disabled",
      "definition" : "A trigger has been disabled for this serviceRequest",
      "designation" : [
        {
          "language" : "da",
          "value" : "Udløser deaktiveret"
        }
      ]
    },
    {
      "code" : "TRIGGER_DONE",
      "display" : "Trigger done",
      "definition" : "A trigger has been executed on this serviceRequest",
      "designation" : [
        {
          "language" : "da",
          "value" : "Udløser er færdig"
        }
      ]
    }
  ]
}

```
