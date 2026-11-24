# Patient 10 - FUT test data v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Patient 10**

## Example Patient: Patient 10

Profile: [ehealth-patient](http://ehealth.sundhed.dk/fhir/11.0.1/StructureDefinition-ehealth-patient.html)

Martin Kristensen (official) Male, DoB: 2004-10-05 ( urn:oid:1.2.208.176.1.2#Danish civil registration system - CPR#0510049527 (use: official))

-------



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "p10",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient"]
  },
  "identifier" : [{
    "use" : "official",
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "0510049527"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Kristensen",
    "given" : ["Martin"]
  }],
  "gender" : "male",
  "birthDate" : "2004-10-05"
}

```
