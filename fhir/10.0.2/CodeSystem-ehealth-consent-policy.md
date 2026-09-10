# Consent policy - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Consent policy**

## CodeSystem: Consent policy 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/ehealth-consent-policy | *Version*:10.0.2 |
| Active as of 2025-12-16 | *Computable Name*:ConsentPolicy |

 
Consent policy 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Consent Policy](ValueSet-vs-ehealth-consent-policy.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-consent-policy",
  "url" : "http://ehealth.sundhed.dk/cs/ehealth-consent-policy",
  "version" : "10.0.2",
  "name" : "ConsentPolicy",
  "title" : "Consent policy",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-16T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Consent policy",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "caseSensitive" : true,
  "content" : "complete",
  "property" : [{
    "code" : "deprecated",
    "uri" : "http://hl7.org/fhir/concept-properties#deprecated",
    "description" : "Indicates that the concept is deprecated and should not be used",
    "type" : "dateTime"
  }],
  "concept" : [{
    "code" : "http://ehealth.sundhed.dk/policy/ehealth/display-triage-result",
    "display" : "display triage result",
    "definition" : "Display triage result",
    "designation" : [{
      "language" : "da",
      "value" : "Vis triageringsresultat"
    }]
  }]
}

```
