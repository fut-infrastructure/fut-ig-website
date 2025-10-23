# Publication Status - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Publication Status**

## CodeSystem: Publication Status 

| | | |
| :--- | :--- | :--- |
| *Official URL*:http://hl7.org/fhir/publication-status | *Version*:6.0.0 | |
| *Standards status:*[Normative](http://hl7.org/fhir/R4/versions.html#std-process) | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 5 | *Computable Name*:PublicationStatus |

 
The lifecycle status of a Value Set or Concept Map. 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem Supplement is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

This code system supplement `http://hl7.org/fhir/publication-status` defines displays on the following codes:

**Additional Language Displays**



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "hl7.org-fhir-publication-status",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-wg",
      "valueCode" : "cds"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
      "valueCode" : "normative"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
      "valueInteger" : 5
    }
  ],
  "url" : "http://hl7.org/fhir/publication-status",
  "version" : "6.0.0",
  "name" : "PublicationStatus",
  "title" : "Publication Status",
  "status" : "active",
  "experimental" : false,
  "date" : "2021-10-27T13:27:27+00:00",
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
  "description" : "The lifecycle status of a Value Set or Concept Map.",
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
  "content" : "supplement",
  "supplements" : "http://hl7.org/fhir/publication-status",
  "concept" : [
    {
      "code" : "draft",
      "display" : "Draft",
      "definition" : "This resource is still under development and is not yet considered to be ready for normal use.",
      "designation" : [
        {
          "language" : "ru",
          "value" : "черновик"
        },
        {
          "language" : "nl",
          "value" : "ontwerp"
        },
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Udkast"
        }
      ]
    },
    {
      "code" : "active",
      "display" : "Active",
      "definition" : "This resource is ready for normal use.",
      "designation" : [
        {
          "language" : "ru",
          "value" : "активный"
        },
        {
          "language" : "nl",
          "value" : "actief"
        },
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Aktiv"
        }
      ]
    },
    {
      "code" : "retired",
      "display" : "Retired",
      "definition" : "This resource has been withdrawn or superseded and should no longer be used.",
      "designation" : [
        {
          "language" : "ru",
          "value" : "удалён"
        },
        {
          "language" : "nl",
          "value" : "verouderd"
        },
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Udgået"
        }
      ]
    },
    {
      "code" : "unknown",
      "display" : "Unknown",
      "definition" : "The authoring system does not know which of the status values currently applies for this resource.  Note: This concept is not to be used for \"other\" - one of the listed statuses is presumed to apply, it's just not known which one.",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Ukendt"
        }
      ]
    }
  ]
}

```
