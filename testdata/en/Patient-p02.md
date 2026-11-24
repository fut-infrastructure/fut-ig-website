# Patient 02 - FUT test data v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Patient 02**

## Example Patient: Patient 02

Profile: [ehealth-patient](http://ehealth.sundhed.dk/fhir/11.0.1/StructureDefinition-ehealth-patient.html)

Ulrik Møller (official) Male, DoB: 1998-01-15 ( urn:oid:1.2.208.176.1.2#Danish civil registration system - CPR#1501989971 (use: official))

-------



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "p02",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient"]
  },
  "identifier" : [{
    "use" : "official",
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "1501989971"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Møller",
    "given" : ["Ulrik"]
  }],
  "gender" : "male",
  "birthDate" : "1998-01-15"
}

```
