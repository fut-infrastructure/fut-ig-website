# Practitioner/42 - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Practitioner/42**

## Example Practitioner: Practitioner/42

version: 2

Profile: [ehealth-practitioner](StructureDefinition-ehealth-practitioner.md)

**name**: Example1 Practitioner 



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "42",
  "meta" : {
    "versionId" : "2",
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner"]
  },
  "name" : [{
    "family" : "Practitioner",
    "given" : ["Example1"]
  }]
}

```
