# Document Sharing State - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Document Sharing State**

## CodeSystem: Document Sharing State 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/document-sharing-state | *Version*:6.0.0 |
| Active as of 2024-11-12 | *Computable Name*:DocumentSharingState |

 
Document Sharing State 

 This Code system is referenced in the content logical definition of the following value sets: 

* [DocumentSharingState](ValueSet-document-sharing-state.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "document-sharing-state",
  "url" : "http://ehealth.sundhed.dk/cs/document-sharing-state",
  "version" : "6.0.0",
  "name" : "DocumentSharingState",
  "title" : "Document Sharing State",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-11-12T00:00:00+00:00",
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
  "description" : "Document Sharing State",
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
      "code" : "invalidated",
      "display" : "invalidated",
      "definition" : "invalidated"
    },
    {
      "code" : "invalidation-retracted",
      "display" : "invalidation-retracted",
      "definition" : "invalidation-retracted"
    },
    {
      "code" : "shared",
      "display" : "shared",
      "definition" : "shared"
    },
    {
      "code" : "being-shared",
      "display" : "being-shared",
      "definition" : "being-shared"
    },
    {
      "code" : "not-shared",
      "display" : "not-shared",
      "definition" : "not-shared"
    },
    {
      "code" : "prevented-shared",
      "display" : "prevented-shared",
      "definition" : "prevented-shared"
    },
    {
      "code" : "deprecated",
      "display" : "deprecated",
      "definition" : "deprecated"
    },
    {
      "code" : "manually-deprecated",
      "display" : "manually-deprecated",
      "definition" : "manually-deprecated"
    },
    {
      "code" : "facility-type-error",
      "display" : "facility-type-error",
      "definition" : "facility-type-error"
    },
    {
      "code" : "practice-setting-error",
      "display" : "practice-setting-error",
      "definition" : "practice-setting-error"
    },
    {
      "code" : "missing-sor-identification",
      "display" : "missing-sor-identification",
      "definition" : "missing-sor-identification"
    },
    {
      "code" : "sharing-target-unavailable",
      "display" : "sharing-target-unavailable",
      "definition" : "sharing-target-unavailable"
    },
    {
      "code" : "missing-qfdd-reference",
      "display" : "missing-qfdd-reference",
      "definition" : "missing-qfdd-reference"
    },
    {
      "code" : "contains-data-absent-reason",
      "display" : "contains-data-absent-reason",
      "definition" : "contains-data-absent-reason"
    },
    {
      "code" : "out-of-date-resource",
      "display" : "out-of-date-resource",
      "definition" : "out-of-date-resource"
    },
    {
      "code" : "no-idref-binding-in-document",
      "display" : "no-idref-binding-in-document",
      "definition" : "no-idref-binding-in-document"
    },
    {
      "code" : "general-transformation-failure",
      "display" : "general-transformation-failure",
      "definition" : "general-transformation-failure"
    },
    {
      "code" : "general-publication-failure",
      "display" : "general-publication-failure",
      "definition" : "general-publication-failure"
    },
    {
      "code" : "yielded-to-duplicate-document",
      "display" : "yielded-to-duplicate-document",
      "definition" : "yielded-to-duplicate-document"
    },
    {
      "code" : "invalid-observation-code",
      "display" : "invalid-observation-code",
      "definition" : "invalid-observation-code"
    }
  ]
}

```
