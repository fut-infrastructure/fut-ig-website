# Extra oxygen saturation - FUT test data v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Extra oxygen saturation**

## ActivityDefinition: Extra oxygen saturation 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-extra-saturation | *Version*:0.2.0 |
| Active as of 2026-11-24 | *Computable Name*: |
| *Other Identifiers:*UUID:d7cb19bd-e35b-4c1d-bbe7-6255a6be51b7 | |
| **Usage**: Clinical Focus: Kronisk obstruktiv lungesygdom | |

* **Code: **: **Id: **
  * **system: **[urn:oid:1.2.208.176.2.1](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-1.2.208.176.2.1--20190829.html)**code: **NPU03011**display: **Hb(Fe; O2-bind.; aB)—Oxygen(O2); mætn. = ?: ad-extra-saturation
* **Code: **: **Version: **
  * **system: **[urn:oid:1.2.208.176.2.1](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-1.2.208.176.2.1--20190829.html)**code: **NPU03011**display: **Hb(Fe; O2-bind.; aB)—Oxygen(O2); mætn. = ?: 0.2.0
* **Code: **: ** **
  * **system: **[urn:oid:1.2.208.176.2.1](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-1.2.208.176.2.1--20190829.html)**code: **NPU03011**display: **Hb(Fe; O2-bind.; aB)—Oxygen(O2); mætn. = ?:  urn:uuid:d7cb19bd-e35b-4c1d-bbe7-6255a6be51b7 
* **Code: **: **Date (date last changed): **
  * **system: **[urn:oid:1.2.208.176.2.1](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-1.2.208.176.2.1--20190829.html)**code: **NPU03011**display: **Hb(Fe; O2-bind.; aB)—Oxygen(O2); mætn. = ?: 2026-11-24 14:40:18+0000
* **Code: **: **Publisher (steward): **
  * **system: **[urn:oid:1.2.208.176.2.1](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-1.2.208.176.2.1--20190829.html)**code: **NPU03011**display: **Hb(Fe; O2-bind.; aB)—Oxygen(O2); mætn. = ?: Den telemedicinske infrastruktur (eHealth Infrastructure)
* **Code: **: **Topic: **
  * **system: **[urn:oid:1.2.208.176.2.1](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-1.2.208.176.2.1--20190829.html)**code: **NPU03011**display: **Hb(Fe; O2-bind.; aB)—Oxygen(O2); mætn. = ?: self-treatment
* **Code: **: **Libraries: **
  * **system: **[urn:oid:1.2.208.176.2.1](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-1.2.208.176.2.1--20190829.html)**code: **NPU03011**display: **Hb(Fe; O2-bind.; aB)—Oxygen(O2); mætn. = ?: 
| |
| :--- |
| [Måling Absolut Grænseværdier Triagering](Library-library-observation-absolute-triage.md) |




## Resource Content

```json
{
  "resourceType" : "ActivityDefinition",
  "id" : "ad-extra-saturation",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-activitydefinition"]
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
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "http://ehealth.sundhed.dk/cs/measurement-sharing-policies",
        "code" : "sharingAllowedDestinationNationalHealthData"
      }]
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
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingApprovalPolicy",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "http://ehealth.sundhed.dk/cs/measurement-sharing-approval-policies",
        "code" : "manual"
      }]
    }
  },
  {
    "extension" : [{
      "url" : "high",
      "valueQuantity" : {
        "value" : 85,
        "unit" : "%",
        "system" : "http://unitsofmeasure.org",
        "code" : "%"
      }
    },
    {
      "url" : "type",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "urn:oid:1.2.208.184.100.1",
          "code" : "RAL"
        },
        {
          "system" : "urn:oid:1.2.208.176.2.1",
          "code" : "NPU03011"
        }]
      }
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-referenceRange"
  },
  {
    "extension" : [{
      "url" : "low",
      "valueQuantity" : {
        "value" : 85.0000001,
        "unit" : "%",
        "system" : "http://unitsofmeasure.org",
        "code" : "%"
      }
    },
    {
      "url" : "high",
      "valueQuantity" : {
        "value" : 88,
        "unit" : "%",
        "system" : "http://unitsofmeasure.org",
        "code" : "%"
      }
    },
    {
      "url" : "type",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "urn:oid:1.2.208.184.100.1",
          "code" : "GAL"
        },
        {
          "system" : "urn:oid:1.2.208.176.2.1",
          "code" : "NPU03011"
        }]
      }
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-referenceRange"
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-base",
    "valueIdentifier" : {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:05b363e1-d75b-41d2-a1d9-9941100dd2eb",
      "assigner" : {
        "identifier" : {
          "system" : "http://ehealth.sundhed.dk/id/ehealth-environment",
          "value" : "dk.ehealth.sundhed.fhir.ig.testdata"
        }
      }
    }
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-employee-title",
    "valueString" : "Iltmætning"
  }],
  "url" : "http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-extra-saturation",
  "identifier" : [{
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:d7cb19bd-e35b-4c1d-bbe7-6255a6be51b7"
  }],
  "version" : "0.2.0",
  "title" : "Iltmætning",
  "status" : "active",
  "date" : "2026-11-24T14:40:18+00:00",
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
  "topic" : [{
    "coding" : [{
      "system" : "http://ehealth.sundhed.dk/cs/topic-type",
      "code" : "self-treatment"
    }]
  }],
  "library" : ["http://ehealth.sundhed.dk/testdata/Library/library-observation-absolute-triage"],
  "code" : {
    "coding" : [{
      "system" : "urn:oid:1.2.208.176.2.1",
      "code" : "NPU03011",
      "display" : "Hb(Fe; O2-bind.; aB)—Oxygen(O2); mætn. = ?"
    }]
  }
}

```
