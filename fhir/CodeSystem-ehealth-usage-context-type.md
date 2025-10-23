# eHealth Usage Contxt Type - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHealth Usage Contxt Type**

## CodeSystem: eHealth Usage Contxt Type 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/ehealth-usage-context-type | *Version*:6.0.0 |
| Active as of 2020-11-20 | *Computable Name*:eHealthUsageContextType |

 
Usage Context type 

 This Code system is referenced in the content logical definition of the following value sets: 

* [eHealthUsageContextType](ValueSet-ehealth-usage-context-type.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-usage-context-type",
  "url" : "http://ehealth.sundhed.dk/cs/ehealth-usage-context-type",
  "version" : "6.0.0",
  "name" : "eHealthUsageContextType",
  "title" : "eHealth Usage Contxt Type",
  "status" : "active",
  "experimental" : false,
  "date" : "2020-11-20T00:00:00+00:00",
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
  "description" : "Usage Context type",
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
      "code" : "activity",
      "display" : "activity type",
      "definition" : "The type of activity in which it is relevant to use a module/element having this use context (see http://hl7.org/fhir/metadatatypes.html#UsageContext). For this context type, the value should be a code taken from the http://ehealth.sundhed.dk/vs/activitydefinition-code value set",
      "designation" : [
        {
          "language" : "da",
          "value" : "Type af aktivitet i hvilken det er relevant at benytte det modul/element/ressource, der har nærværende brugskontekst (UsageContext)."
        }
      ]
    },
    {
      "code" : "supports",
      "display" : "supports",
      "definition" : "The type of activity supported by a module/element having this use context (see http://hl7.org/fhir/metadatatypes.html#UsageContext). For this context type, the value should be a code taken from the http://ehealth.sundhed.dk/vs/activitydefinition-code value set",
      "designation" : [
        {
          "language" : "da",
          "value" : "Type af aktivitet understøttet af det modul/element/ressource, der har nærværende brugskontekst (UsageContext)."
        }
      ]
    },
    {
      "code" : "range",
      "display" : "range",
      "definition" : "The type of reference range with which it is relevant to use a module/element having this use context (see http://hl7.org/fhir/metadatatypes.html#UsageContext). For this context type, the value should be a code taken from the http://ehealth.sundhed.dk/vs/reference-range-type value set",
      "designation" : [
        {
          "language" : "da",
          "value" : "Type af grænseværdi med hvilken det er relevant at benytte det modul/element/ressource, der har nærværende brugskontekst (UsageContext)."
        }
      ]
    },
    {
      "code" : "questionnaire-related",
      "display" : "questionnaire related",
      "definition" : "The type of questionnaire element with which it is relevant to use a coded values/id registries having this use context (see http://hl7.org/fhir/metadatatypes.html#UsageContext). For this context type, the value should be a code taken from the http://ehealth.sundhed.dk/vs/questionnaire-elements value set",
      "designation" : [
        {
          "language" : "da",
          "value" : "Type af spørgeskemaelement med hvilken det er relevant at benytte kodede værdier/id register, der har nærværende brugskontekst (UsageContext)."
        }
      ]
    }
  ]
}

```
