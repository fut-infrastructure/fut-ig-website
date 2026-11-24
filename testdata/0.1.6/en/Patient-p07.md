# Patient 07 - FUT test data v0.1.6

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Patient 07**

## Example Patient: Patient 07

Profile: [ehealth-patient](http://ehealth.sundhed.dk/fhir/11.0.1/StructureDefinition-ehealth-patient.html)

Karl Larsen (official) Male, DoB: 1982-09-15 ( urn:oid:1.2.208.176.1.2#Danish civil registration system - CPR#1509829345 (use: official))

-------



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "p07",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient"]
  },
  "identifier" : [{
    "use" : "official",
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "1509829345"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Larsen",
    "given" : ["Karl"]
  }],
  "gender" : "male",
  "birthDate" : "1982-09-15"
}

```
