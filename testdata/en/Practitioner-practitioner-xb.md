# Practitioner kpro - FUT test data v0.1.6

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Practitioner kpro**

## Example Practitioner: Practitioner kpro

Profile: [ehealth-practitioner](http://ehealth.sundhed.dk/fhir/11.0.1/StructureDefinition-ehealth-practitioner.html)

Test kpro Testesen (urn:oid:0.9.2342.19200300.100.1.1#ebf319ef-fcd7-4757-80df-0611f11bb618)

-------

| | |
| :--- | :--- |
| Active: | true |
| Qualification: | Læge* Identifier: `https://autregweb.sst.dk`/00102
 |



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "practitioner-xb",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner"]
  },
  "identifier" : [{
    "system" : "urn:oid:0.9.2342.19200300.100.1.1",
    "value" : "ebf319ef-fcd7-4757-80df-0611f11bb618"
  }],
  "active" : true,
  "name" : [{
    "family" : "Testesen",
    "given" : ["Test", "kpro"]
  }],
  "qualification" : [{
    "identifier" : [{
      "system" : "https://autregweb.sst.dk",
      "value" : "00102"
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
