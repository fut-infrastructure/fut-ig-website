# Patient 09 - FUT test data v0.1.6

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Patient 09**

## Example Patient: Patient 09

Profile: [ehealth-patient](http://ehealth.sundhed.dk/fhir/11.0.1/StructureDefinition-ehealth-patient.html)

Ane Larsen (official) Female, DoB: 1983-05-19 ( urn:oid:1.2.208.176.1.2#Danish civil registration system - CPR#1905839388 (use: official))

-------



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "p09",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient"]
  },
  "identifier" : [{
    "use" : "official",
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "1905839388"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Larsen",
    "given" : ["Ane"]
  }],
  "gender" : "female",
  "birthDate" : "1983-05-19"
}

```
