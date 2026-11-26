# COPD monitoring plan (oxygen saturation, pulse and questionnaire) - eHealth Infrastructure Test Data v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **COPD monitoring plan (oxygen saturation, pulse and questionnaire)**

## PlanDefinition: COPD monitoring plan (oxygen saturation, pulse and questionnaire) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/testdata/PlanDefinition/plandefinition | *Version*:1.0.0 |
| Active as of 2026-11-26 | *Computable Name*: |
| *Other Identifiers:*UUID:b7510240-987f-4ec9-8436-a0af44bbe271 | |
| **Usage**: Clinical Focus: Kronisk obstruktiv lungesygdom | |

* **Actions: **: **Url: **
  * : [Målinger og spørgeskema (iltmætning, puls og spørgeskema)](PlanDefinition-plandefinition.md)
* **Actions: **: **Version: **
  * : 1.0.0
* **Actions: **: ** **
  * :  urn:uuid:b7510240-987f-4ec9-8436-a0af44bbe271 
* **Actions: **: **Title: **
  * : Målinger og spørgeskema (iltmætning, puls og spørgeskema)
* **Actions: **: **Date: **
  * : 2026-11-26 14:31:33+0000
* **Actions: **: **Publisher: **
  * : Den telemedicinske infrastruktur (eHealth Infrastructure)
* **Actions: **: **Purpose: **
  * : Spørgeskema samt iltmætning og puls, planlagt og ekstra.



## Resource Content

```json
{
  "resourceType" : "PlanDefinition",
  "id" : "plandefinition",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition"]
  },
  "extension" : [{
    "extension" : [{
      "url" : "reference",
      "valueReference" : {
        "reference" : "Organization/org-region-midtjylland"
      }
    },
    {
      "url" : "role",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://ehealth.sundhed.dk/cs/modifier-role",
          "code" : "owner"
        }]
      }
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role"
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-base",
    "valueIdentifier" : {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:cab889d1-e01e-4d38-9a5d-ed050722a6b3",
      "assigner" : {
        "identifier" : {
          "system" : "http://ehealth.sundhed.dk/id/ehealth-environment",
          "value" : "dk.ehealth.sundhed.fhir.ig.testdata"
        }
      }
    }
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-base-environment",
    "valueIdentifier" : {
      "system" : "http://ehealth.sundhed.dk/id/ehealth-environment",
      "value" : "dk.ehealth.sundhed.fhir.ig.testdata"
    }
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-employee-title",
    "valueString" : "Målinger og spørgeskema"
  }],
  "url" : "http://ehealth.sundhed.dk/testdata/PlanDefinition/plandefinition",
  "identifier" : [{
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:b7510240-987f-4ec9-8436-a0af44bbe271"
  }],
  "version" : "1.0.0",
  "title" : "Målinger og spørgeskema (iltmætning, puls og spørgeskema)",
  "status" : "active",
  "date" : "2026-11-26T14:31:33+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "useContext" : [{
    "code" : {
      "system" : "http://terminology.hl7.org/CodeSystem/usage-context-type",
      "code" : "focus"
    },
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "urn:oid:1.2.208.176.2.4",
        "code" : "DJ44",
        "display" : "Kronisk obstruktiv lungesygdom"
      }]
    }
  }],
  "purpose" : "Spørgeskema samt iltmætning og puls, planlagt og ekstra.",
  "action" : [{
    "id" : "d8d2c923-8157-455c-bbd2-f2df7c92e26c",
    "extension" : [{
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-include-as-extra",
      "valueBoolean" : false
    }],
    "title" : "Målinger og spørgeskema",
    "timingTiming" : {
      "repeat" : {
        "duration" : 4,
        "durationUnit" : "h",
        "frequency" : 1,
        "dayOfWeek" : ["mon", "wed", "fri"],
        "timeOfDay" : ["08:00:00"]
      }
    },
    "groupingBehavior" : "visual-group",
    "definitionCanonical" : "http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-head",
    "action" : [{
      "id" : "a9c477ac-f301-462c-bcf9-e4e44bfd4320",
      "extension" : [{
        "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-include-as-extra",
        "valueBoolean" : false
      }],
      "title" : "Introduktion",
      "relatedAction" : [{
        "actionId" : "d8d2c923-8157-455c-bbd2-f2df7c92e26c",
        "relationship" : "after-start"
      }],
      "timingTiming" : {
        "repeat" : {
          "duration" : 4,
          "durationUnit" : "h",
          "frequency" : 1,
          "dayOfWeek" : ["mon", "wed", "fri"],
          "timeOfDay" : ["08:00:00"]
        }
      },
      "definitionCanonical" : "http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-intro"
    },
    {
      "id" : "7a482753-5424-4d30-a28a-4ab9c120de47",
      "extension" : [{
        "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-include-as-extra",
        "valueBoolean" : false
      }],
      "title" : "Måling af iltmætning og puls",
      "relatedAction" : [{
        "actionId" : "a9c477ac-f301-462c-bcf9-e4e44bfd4320",
        "relationship" : "after-end"
      }],
      "timingTiming" : {
        "repeat" : {
          "duration" : 4,
          "durationUnit" : "h",
          "frequency" : 1,
          "dayOfWeek" : ["mon", "wed", "fri"],
          "timeOfDay" : ["08:00:00"]
        }
      },
      "definitionCanonical" : "http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-sat-pulse-intro"
    },
    {
      "id" : "0fa646b6-b48f-4c09-83fa-ff2b33b1763c",
      "extension" : [{
        "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-include-as-extra",
        "valueBoolean" : false
      }],
      "title" : "Forberedelse",
      "relatedAction" : [{
        "actionId" : "7a482753-5424-4d30-a28a-4ab9c120de47",
        "relationship" : "after-end"
      }],
      "timingTiming" : {
        "repeat" : {
          "duration" : 4,
          "durationUnit" : "h",
          "frequency" : 1,
          "dayOfWeek" : ["mon", "wed", "fri"],
          "timeOfDay" : ["08:00:00"]
        }
      },
      "definitionCanonical" : "http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-sat-pulse-prep"
    },
    {
      "id" : "c8a78fad-4a60-4c0c-85bf-674a6e86d86f",
      "extension" : [{
        "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-include-as-extra",
        "valueBoolean" : false
      }],
      "title" : "Iltmætning og pulsmåling",
      "relatedAction" : [{
        "actionId" : "0fa646b6-b48f-4c09-83fa-ff2b33b1763c",
        "relationship" : "after-end"
      }],
      "timingTiming" : {
        "repeat" : {
          "duration" : 4,
          "durationUnit" : "h",
          "frequency" : 1,
          "dayOfWeek" : ["mon", "wed", "fri"],
          "timeOfDay" : ["08:00:00"]
        }
      },
      "definitionCanonical" : "http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-sat-pulse",
      "action" : [{
        "id" : "701ab1f7-23fe-4ff2-9e4b-d2f2623e22c7",
        "extension" : [{
          "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-include-as-extra",
          "valueBoolean" : false
        }],
        "title" : "Iltmætning",
        "relatedAction" : [{
          "actionId" : "c8a78fad-4a60-4c0c-85bf-674a6e86d86f",
          "relationship" : "after-start"
        }],
        "timingTiming" : {
          "repeat" : {
            "duration" : 4,
            "durationUnit" : "h",
            "frequency" : 1,
            "dayOfWeek" : ["mon", "wed", "fri"],
            "timeOfDay" : ["08:00:00"]
          }
        },
        "definitionCanonical" : "http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-saturation"
      },
      {
        "id" : "6a152290-db57-4f13-b7bf-92f09e0f09e7",
        "extension" : [{
          "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-include-as-extra",
          "valueBoolean" : false
        }],
        "title" : "Puls",
        "relatedAction" : [{
          "actionId" : "c8a78fad-4a60-4c0c-85bf-674a6e86d86f",
          "relationship" : "after-start"
        }],
        "timingTiming" : {
          "repeat" : {
            "duration" : 4,
            "durationUnit" : "h",
            "frequency" : 1,
            "dayOfWeek" : ["mon", "wed", "fri"],
            "timeOfDay" : ["08:00:00"]
          }
        },
        "definitionCanonical" : "http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-pulse"
      }]
    },
    {
      "id" : "5dbb9ca9-01fa-42d5-afcf-b42dff5fc78b",
      "extension" : [{
        "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-include-as-extra",
        "valueBoolean" : false
      }],
      "title" : "Spørgeskema om tilstand og symptomer",
      "relatedAction" : [{
        "actionId" : "c8a78fad-4a60-4c0c-85bf-674a6e86d86f",
        "relationship" : "after-end"
      }],
      "timingTiming" : {
        "repeat" : {
          "duration" : 4,
          "durationUnit" : "h",
          "frequency" : 1,
          "dayOfWeek" : ["mon", "wed", "fri"],
          "timeOfDay" : ["08:00:00"]
        }
      },
      "definitionCanonical" : "http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-questionnaire"
    },
    {
      "id" : "de176506-1b2e-4736-a30f-98839969c5d7",
      "extension" : [{
        "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-include-as-extra",
        "valueBoolean" : false
      }],
      "title" : "Afrunding",
      "relatedAction" : [{
        "actionId" : "5dbb9ca9-01fa-42d5-afcf-b42dff5fc78b",
        "relationship" : "after-end"
      }],
      "timingTiming" : {
        "repeat" : {
          "duration" : 4,
          "durationUnit" : "h",
          "frequency" : 1,
          "dayOfWeek" : ["mon", "wed", "fri"],
          "timeOfDay" : ["08:00:00"]
        }
      },
      "definitionCanonical" : "http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-closing"
    }]
  },
  {
    "id" : "0ee4c15b-a7b1-40dd-9e44-c1c4238a1dda",
    "extension" : [{
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-include-as-extra",
      "valueBoolean" : false
    }],
    "title" : "Ekstra målinger og spørgeskema",
    "groupingBehavior" : "visual-group",
    "definitionCanonical" : "http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-extra-head",
    "action" : [{
      "id" : "8d76df58-da9f-4096-8e05-a66ebcc13af4",
      "extension" : [{
        "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-include-as-extra",
        "valueBoolean" : false
      }],
      "title" : "Iltmætning og pulsmåling",
      "relatedAction" : [{
        "actionId" : "0ee4c15b-a7b1-40dd-9e44-c1c4238a1dda",
        "relationship" : "after-start"
      }],
      "definitionCanonical" : "http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-extra-sat-pulse",
      "action" : [{
        "id" : "404a936e-89b2-4a6a-ae55-0a54bcea27db",
        "extension" : [{
          "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-include-as-extra",
          "valueBoolean" : false
        }],
        "title" : "Iltmætning",
        "relatedAction" : [{
          "actionId" : "8d76df58-da9f-4096-8e05-a66ebcc13af4",
          "relationship" : "after-start"
        }],
        "definitionCanonical" : "http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-extra-saturation"
      },
      {
        "id" : "18dc30db-88f6-4235-b08a-4cfabed13ee7",
        "extension" : [{
          "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-include-as-extra",
          "valueBoolean" : false
        }],
        "title" : "Puls",
        "relatedAction" : [{
          "actionId" : "8d76df58-da9f-4096-8e05-a66ebcc13af4",
          "relationship" : "after-start"
        }],
        "definitionCanonical" : "http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-extra-pulse"
      }]
    },
    {
      "id" : "53ffbcbf-5467-41ee-82fb-bde6ea4d0d07",
      "extension" : [{
        "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-include-as-extra",
        "valueBoolean" : false
      }],
      "title" : "Spørgeskema om tilstand og symptomer",
      "relatedAction" : [{
        "actionId" : "8d76df58-da9f-4096-8e05-a66ebcc13af4",
        "relationship" : "after-end"
      }],
      "definitionCanonical" : "http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-extra-questionnaire"
    }]
  }]
}

```
