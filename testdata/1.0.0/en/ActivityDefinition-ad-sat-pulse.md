# Oxygen saturation and pulse (same device group) - eHealth Infrastructure Test Data v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Oxygen saturation and pulse (same device group)**

## ActivityDefinition: Oxygen saturation and pulse (same device group) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-sat-pulse | *Version*:1.0.0 |
| Active as of 2026-11-26 | *Computable Name*: |
| *Other Identifiers:*UUID:272e6a5a-0ba7-4bdd-97fc-439a857cc079 | |

 
Overføres måling ikke via bluetooth, skal du vælge at indtaste målingen manuelt 

* **Code: **: **Id: **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.5/CodeSystem-ehealth-activitydefinition-code.html)**code: **SDG: ad-sat-pulse
* **Code: **: **Version: **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.5/CodeSystem-ehealth-activitydefinition-code.html)**code: **SDG: 1.0.0
* **Code: **: ** **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.5/CodeSystem-ehealth-activitydefinition-code.html)**code: **SDG:  urn:uuid:272e6a5a-0ba7-4bdd-97fc-439a857cc079 
* **Code: **: **Date (date last changed): **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.5/CodeSystem-ehealth-activitydefinition-code.html)**code: **SDG: 2026-11-26 14:31:33+0000
* **Code: **: **Publisher (steward): **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.5/CodeSystem-ehealth-activitydefinition-code.html)**code: **SDG: Den telemedicinske infrastruktur (eHealth Infrastructure)
* **Code: **: **Description: **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.5/CodeSystem-ehealth-activitydefinition-code.html)**code: **SDG: Overføres måling ikke via bluetooth, skal du vælge at indtaste målingen manuelt
* **Code: **: **Topic: **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.5/CodeSystem-ehealth-activitydefinition-code.html)**code: **SDG: self-treatment



## Resource Content

```json
{
  "resourceType" : "ActivityDefinition",
  "id" : "ad-sat-pulse",
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
      "value" : "urn:uuid:55239d11-3b90-4ee1-95d1-70d890f83a8d",
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
    "valueString" : "Iltmætning og pulsmåling"
  }],
  "url" : "http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-sat-pulse",
  "identifier" : [{
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:272e6a5a-0ba7-4bdd-97fc-439a857cc079"
  }],
  "version" : "1.0.0",
  "title" : "Iltmætning og pulsmåling",
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
  "description" : "\nOverføres måling ikke via bluetooth, skal du vælge at indtaste målingen manuelt",
  "topic" : [{
    "coding" : [{
      "system" : "http://ehealth.sundhed.dk/cs/topic-type",
      "code" : "self-treatment"
    }]
  }],
  "relatedArtifact" : [{
    "id" : "c83eefcc-73e5-4dbe-83f3-60b7ce7757c1",
    "type" : "documentation",
    "label" : "[manual]",
    "document" : {
      "contentType" : "text/markdown",
      "data" : "U8OmdCBpbHRtw6VsZXJlbiBww6UgZmluZ2VyZW4gb2cgbcOlbCBkaW4gaWx0bcOmdG5pbmcgb2cgcHVscy4KT3ZlcmbDuHJlcyBtw6VsaW5nZW4gaWtrZSBhdXRvbWF0aXNrLCBza2FsIGR1IHbDpmxnZSBhdCBpbmR0YXN0ZSBtw6VsaW5nZW4gbWFudWVsdC4KClRyeWsgcMOlICJpbmR0YXN0IiBmb3IgYXQgZsOlIHRhc3RhdHVyZXQgZnJlbQoKTsOlciBkZSBrb3JyZWt0ZSBtw6VsaW5nZXIgc2VzIGkgZmVsdGV0LCB0cnlrIHDDpSAidmlkZXJlIg=="
    }
  }],
  "code" : {
    "coding" : [{
      "system" : "http://ehealth.sundhed.dk/cs/activitydefinition-code",
      "code" : "SDG"
    }]
  }
}

```
