# Practitioner fob - FUT test data v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Practitioner fob**

## Example Practitioner: Practitioner fob

Profile: [ehealth-practitioner](http://ehealth.sundhed.dk/fhir/11.0.1/StructureDefinition-ehealth-practitioner.html)

Test fob Testesen (urn:oid:0.9.2342.19200300.100.1.1#55c30f5e-efb5-4e84-8212-cbf89477ce46)

-------

| | |
| :--- | :--- |
| Active: | true |
| Qualification: | Læge* Identifier: `https://autregweb.sst.dk`/00103
 |



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "practitioner-xc",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner"]
  },
  "identifier" : [{
    "system" : "urn:oid:0.9.2342.19200300.100.1.1",
    "value" : "55c30f5e-efb5-4e84-8212-cbf89477ce46"
  }],
  "active" : true,
  "name" : [{
    "family" : "Testesen",
    "given" : ["Test", "fob"]
  }],
  "qualification" : [{
    "identifier" : [{
      "system" : "https://autregweb.sst.dk",
      "value" : "00103"
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
