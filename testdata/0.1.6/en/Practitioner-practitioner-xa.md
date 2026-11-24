# Practitioner telma - FUT test data v0.1.6

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Practitioner telma**

## Example Practitioner: Practitioner telma

Profile: [ehealth-practitioner](http://ehealth.sundhed.dk/fhir/11.0.1/StructureDefinition-ehealth-practitioner.html)

Test telma Testesen (urn:oid:0.9.2342.19200300.100.1.1#19a67fa3-f91e-45e6-bedb-a737845329a4)

-------

| | |
| :--- | :--- |
| Active: | true |
| Qualification: | Læge* Identifier: `https://autregweb.sst.dk`/00101
 |



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "practitioner-xa",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner"]
  },
  "identifier" : [{
    "system" : "urn:oid:0.9.2342.19200300.100.1.1",
    "value" : "19a67fa3-f91e-45e6-bedb-a737845329a4"
  }],
  "active" : true,
  "name" : [{
    "family" : "Testesen",
    "given" : ["Test", "telma"]
  }],
  "qualification" : [{
    "identifier" : [{
      "system" : "https://autregweb.sst.dk",
      "value" : "00101"
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
