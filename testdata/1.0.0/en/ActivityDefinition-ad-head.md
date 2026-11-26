# Head activity - eHealth Infrastructure Test Data v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Head activity**

## ActivityDefinition: Head activity 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-head | *Version*:1.0.0 |
| Active as of 2026-11-26 | *Computable Name*: |
| *Other Identifiers:*UUID:a996d0cd-a36d-4f20-b58f-c6d2b1c95882 | |

* **Code: **: **Id: **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.5/CodeSystem-ehealth-activitydefinition-code.html)**code: **HA: ad-head
* **Code: **: **Version: **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.5/CodeSystem-ehealth-activitydefinition-code.html)**code: **HA: 1.0.0
* **Code: **: ** **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.5/CodeSystem-ehealth-activitydefinition-code.html)**code: **HA:  urn:uuid:a996d0cd-a36d-4f20-b58f-c6d2b1c95882 
* **Code: **: **Date (date last changed): **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.5/CodeSystem-ehealth-activitydefinition-code.html)**code: **HA: 2026-11-26 14:31:33+0000
* **Code: **: **Publisher (steward): **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.5/CodeSystem-ehealth-activitydefinition-code.html)**code: **HA: Den telemedicinske infrastruktur (eHealth Infrastructure)
* **Code: **: **Topic: **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.5/CodeSystem-ehealth-activitydefinition-code.html)**code: **HA: self-treatment



## Resource Content

```json
{
  "resourceType" : "ActivityDefinition",
  "id" : "ad-head",
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
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-base",
    "valueIdentifier" : {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:66b7bb62-2c4e-4b94-8355-bab359b27e74",
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
    "valueString" : "Målinger og spørgeskema"
  }],
  "url" : "http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-head",
  "identifier" : [{
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:a996d0cd-a36d-4f20-b58f-c6d2b1c95882"
  }],
  "version" : "1.0.0",
  "title" : "Målinger og spørgeskema",
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
  "topic" : [{
    "coding" : [{
      "system" : "http://ehealth.sundhed.dk/cs/topic-type",
      "code" : "self-treatment"
    }]
  }],
  "code" : {
    "coding" : [{
      "system" : "http://ehealth.sundhed.dk/cs/activitydefinition-code",
      "code" : "HA"
    }]
  }
}

```
