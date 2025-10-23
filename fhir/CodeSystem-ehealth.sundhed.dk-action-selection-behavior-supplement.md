# Action Selection Behavior Supplement - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Action Selection Behavior Supplement**

## CodeSystem: Action Selection Behavior Supplement 

| | | |
| :--- | :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/hl7.org/fhir/action-selection-behavior-supplement | *Version*:6.0.0 | |
| *Standards status:*[Trial-use](http://hl7.org/fhir/R4/versions.html#std-process) | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 2 | *Computable Name*:ActionSelectionBehaviorSupplement |
| *Other Identifiers:*OID:2.16.840.1.113883.4.642.4.802 | | |

 
Defines selection behavior of a group. 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem Supplement is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

This code system supplement `http://ehealth.sundhed.dk/hl7.org/fhir/action-selection-behavior-supplement` defines displays on the following codes:



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth.sundhed.dk-action-selection-behavior-supplement",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-wg",
      "valueCode" : "cds"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
      "valueCode" : "trial-use"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
      "valueInteger" : 2
    }
  ],
  "url" : "http://ehealth.sundhed.dk/hl7.org/fhir/action-selection-behavior-supplement",
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:2.16.840.1.113883.4.642.4.802"
    }
  ],
  "version" : "6.0.0",
  "name" : "ActionSelectionBehaviorSupplement",
  "title" : "Action Selection Behavior Supplement",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-10-23T10:34:08+00:00",
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
  "description" : "Defines selection behavior of a group.",
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
  "supplements" : "http://hl7.org/fhir/action-selection-behavior",
  "concept" : [
    {
      "code" : "any",
      "display" : "Any",
      "definition" : "Any number of the actions in the group may be chosen, from zero to all.",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Enhver"
        }
      ]
    },
    {
      "code" : "all",
      "display" : "All",
      "definition" : "All the actions in the group must be selected as a single unit.",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Alle"
        }
      ]
    },
    {
      "code" : "all-or-none",
      "display" : "All Or None",
      "definition" : "All the actions in the group are meant to be chosen as a single unit: either all must be selected by the end user, or none may be selected.",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Alle eller ingen"
        }
      ]
    },
    {
      "code" : "exactly-one",
      "display" : "Exactly One",
      "definition" : "The end user must choose one and only one of the selectable actions in the group. The user SHALL NOT choose none of the actions in the group.",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Præcis en"
        }
      ]
    },
    {
      "code" : "at-most-one",
      "display" : "At Most One",
      "definition" : "The end user may choose zero or at most one of the actions in the group.",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Højst en"
        }
      ]
    },
    {
      "code" : "one-or-more",
      "display" : "One Or More",
      "definition" : "The end user must choose a minimum of one, and as many additional as desired.",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "En eller flere"
        }
      ]
    }
  ]
}

```
