# Consent Scope - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Consent Scope**

## CodeSystem: Consent Scope 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/ehealth-consent-scope | *Version*:10.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ConsentScope |

 
Consent scope 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ConsentScope](ValueSet-vs-ehealth-consent-scope.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "cs-ehealth-consent-scope",
  "url" : "http://ehealth.sundhed.dk/cs/ehealth-consent-scope",
  "version" : "10.0.0",
  "name" : "ConsentScope",
  "title" : "Consent Scope",
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
  "description" : "Consent scope",
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
    "code" : "behavior",
    "display" : "Behavior",
    "definition" : "Behavior"
  }]
}

```
