# Extra oxygen saturation and pulse (same device group) - FUT test data v0.1.6

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Extra oxygen saturation and pulse (same device group)**

## ActivityDefinition: Extra oxygen saturation and pulse (same device group) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-extra-sat-pulse | *Version*:0.1.6 |
| Active as of 2026-11-24 | *Computable Name*: |
| *Other Identifiers:*UUID:2bd24b55-2dbc-4e28-8660-2c18bc43f111 | |

 
Overføres måling ikke via bluetooth, skal du vælge at indtaste målingen manuelt 

* **Code: **: **Id: **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-ehealth-activitydefinition-code.html)**code: **SDG: ad-extra-sat-pulse
* **Code: **: **Version: **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-ehealth-activitydefinition-code.html)**code: **SDG: 0.1.6
* **Code: **: ** **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-ehealth-activitydefinition-code.html)**code: **SDG:  urn:uuid:2bd24b55-2dbc-4e28-8660-2c18bc43f111 
* **Code: **: **Date (date last changed): **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-ehealth-activitydefinition-code.html)**code: **SDG: 2026-11-24 14:19:23+0000
* **Code: **: **Publisher (steward): **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-ehealth-activitydefinition-code.html)**code: **SDG: Den telemedicinske infrastruktur (eHealth Infrastructure)
* **Code: **: **Description: **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-ehealth-activitydefinition-code.html)**code: **SDG: Overføres måling ikke via bluetooth, skal du vælge at indtaste målingen manuelt
* **Code: **: **Topic: **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-ehealth-activitydefinition-code.html)**code: **SDG: self-treatment



## Resource Content

```json
{
  "resourceType" : "ActivityDefinition",
  "id" : "ad-extra-sat-pulse",
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
      "value" : "urn:uuid:4c4d0b1a-f1bd-4b7f-95c2-b299d3b9f9be",
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
  "url" : "http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-extra-sat-pulse",
  "identifier" : [{
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:2bd24b55-2dbc-4e28-8660-2c18bc43f111"
  }],
  "version" : "0.1.6",
  "title" : "Iltmætning og pulsmåling",
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
  "description" : "\nOverføres måling ikke via bluetooth, skal du vælge at indtaste målingen manuelt",
  "topic" : [{
    "coding" : [{
      "system" : "http://ehealth.sundhed.dk/cs/topic-type",
      "code" : "self-treatment"
    }]
  }],
  "relatedArtifact" : [{
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
