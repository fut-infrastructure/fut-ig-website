# Pulse - FUT test data v0.1.6

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Pulse**

## ActivityDefinition: Pulse 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-pulse | *Version*:0.1.6 |
| Active as of 2026-11-24 | *Computable Name*: |
| *Other Identifiers:*UUID:fab3ffd6-b78e-4783-8f5c-b5a253bb1991 | |
| **Usage**: Clinical Focus: Kronisk obstruktiv lungesygdom | |

* **Code: **: **Id: **
  * **system: **[urn:oid:1.2.208.176.2.1](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-1.2.208.176.2.1--20190829.html)**code: **NPU21692**display: **Hjerte—Systole; frekv. = ? × 1/min: ad-pulse
* **Code: **: **Version: **
  * **system: **[urn:oid:1.2.208.176.2.1](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-1.2.208.176.2.1--20190829.html)**code: **NPU21692**display: **Hjerte—Systole; frekv. = ? × 1/min: 0.1.6
* **Code: **: ** **
  * **system: **[urn:oid:1.2.208.176.2.1](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-1.2.208.176.2.1--20190829.html)**code: **NPU21692**display: **Hjerte—Systole; frekv. = ? × 1/min:  urn:uuid:fab3ffd6-b78e-4783-8f5c-b5a253bb1991 
* **Code: **: **Date (date last changed): **
  * **system: **[urn:oid:1.2.208.176.2.1](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-1.2.208.176.2.1--20190829.html)**code: **NPU21692**display: **Hjerte—Systole; frekv. = ? × 1/min: 2026-11-24 14:19:23+0000
* **Code: **: **Publisher (steward): **
  * **system: **[urn:oid:1.2.208.176.2.1](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-1.2.208.176.2.1--20190829.html)**code: **NPU21692**display: **Hjerte—Systole; frekv. = ? × 1/min: Den telemedicinske infrastruktur (eHealth Infrastructure)
* **Code: **: **Topic: **
  * **system: **[urn:oid:1.2.208.176.2.1](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-1.2.208.176.2.1--20190829.html)**code: **NPU21692**display: **Hjerte—Systole; frekv. = ? × 1/min: self-treatment
* **Code: **: **Libraries: **
  * **system: **[urn:oid:1.2.208.176.2.1](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-1.2.208.176.2.1--20190829.html)**code: **NPU21692**display: **Hjerte—Systole; frekv. = ? × 1/min: 
| |
| :--- |
| [Måling Absolut Grænseværdier Triagering](Library-library-observation-absolute-triage.md) |




## Resource Content

```json
{
  "resourceType" : "ActivityDefinition",
  "id" : "ad-pulse",
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
        "value" : 50,
        "unit" : "1/min",
        "system" : "http://unitsofmeasure.org",
        "code" : "1/min"
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
          "code" : "NPU21692"
        }]
      }
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-referenceRange"
  },
  {
    "extension" : [{
      "url" : "low",
      "valueQuantity" : {
        "value" : 50.0000001,
        "unit" : "1/min",
        "system" : "http://unitsofmeasure.org",
        "code" : "1/min"
      }
    },
    {
      "url" : "high",
      "valueQuantity" : {
        "value" : 60,
        "unit" : "1/min",
        "system" : "http://unitsofmeasure.org",
        "code" : "1/min"
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
          "code" : "NPU21692"
        }]
      }
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-referenceRange"
  },
  {
    "extension" : [{
      "url" : "low",
      "valueQuantity" : {
        "value" : 110,
        "unit" : "1/min",
        "system" : "http://unitsofmeasure.org",
        "code" : "1/min"
      }
    },
    {
      "url" : "high",
      "valueQuantity" : {
        "value" : 129.9999999,
        "unit" : "1/min",
        "system" : "http://unitsofmeasure.org",
        "code" : "1/min"
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
          "code" : "NPU21692"
        }]
      }
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-referenceRange"
  },
  {
    "extension" : [{
      "url" : "low",
      "valueQuantity" : {
        "value" : 130,
        "unit" : "1/min",
        "system" : "http://unitsofmeasure.org",
        "code" : "1/min"
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
          "code" : "NPU21692"
        }]
      }
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-referenceRange"
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-base",
    "valueIdentifier" : {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:6c6264e3-06d9-4f1b-a9a5-777a4e4845ef",
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
    "valueString" : "Puls"
  }],
  "url" : "http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-pulse",
  "identifier" : [{
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:fab3ffd6-b78e-4783-8f5c-b5a253bb1991"
  }],
  "version" : "0.1.6",
  "title" : "Puls",
  "status" : "active",
  "date" : "2026-11-24T14:19:23+00:00",
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
      "code" : "NPU21692",
      "display" : "Hjerte—Systole; frekv. = ? × 1/min"
    }]
  }
}

```
