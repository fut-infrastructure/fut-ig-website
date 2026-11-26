# Practitioner telesaar - eHealth Infrastructure Test Data v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Practitioner telesaar**

## Example Practitioner: Practitioner telesaar

Profile: [ehealth-practitioner](http://ehealth.sundhed.dk/fhir/11.0.5/StructureDefinition-ehealth-practitioner.html)

Test telesaar Testesen (urn:oid:0.9.2342.19200300.100.1.1#f0d64ae8-51b2-4c9f-b791-66acb4f0c28a)

-------

| | |
| :--- | :--- |
| Active: | true |
| Qualification: | Læge* Identifier: `https://autregweb.sst.dk`/00104
 |



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "practitioner-xd",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner"]
  },
  "identifier" : [{
    "system" : "urn:oid:0.9.2342.19200300.100.1.1",
    "value" : "f0d64ae8-51b2-4c9f-b791-66acb4f0c28a"
  }],
  "active" : true,
  "name" : [{
    "family" : "Testesen",
    "given" : ["Test", "telesaar"]
  }],
  "qualification" : [{
    "identifier" : [{
      "system" : "https://autregweb.sst.dk",
      "value" : "00104"
    }],
    "code" : {
      "coding" : [{
        "system" : "http://hl7.dk/fhir/core/CodeSystem/DkCoreProfessionGroupCodes",
        "code" : "7170",
        "display" : "Læge"
      }]
    }
  }]
}

```
