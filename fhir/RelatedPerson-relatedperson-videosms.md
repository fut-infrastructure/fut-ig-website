# RelatedPerson with video-appointment SMS reminder telecom - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **RelatedPerson with video-appointment SMS reminder telecom**

## Example RelatedPerson: RelatedPerson with video-appointment SMS reminder telecom

Profile: [ehealth-relatedperson](StructureDefinition-ehealth-relatedperson.md)

**active**: true

**patient**: [Nancy Ann Berggren (official) Unknown, DoB Unknown ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#2512489996 (use: official, ))](Patient-102.md)

**relationship**: spouse

**name**: RelatedPerson Test (Official)

**telecom**: +4512345678



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "relatedperson-videosms",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson"]
  },
  "active" : true,
  "patient" : {
    "reference" : "Patient/102"
  },
  "relationship" : [{
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
      "code" : "SPS"
    }]
  }],
  "name" : [{
    "use" : "official",
    "family" : "Test",
    "given" : ["RelatedPerson"]
  }],
  "telecom" : [{
    "extension" : [{
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-telecom-purpose",
      "valueCoding" : {
        "system" : "http://ehealth.sundhed.dk/cs/telecom-purpose",
        "code" : "video-appointment-reminder-sms"
      }
    }],
    "system" : "sms",
    "value" : "+4512345678"
  }]
}

```
