# Patient 08 - FUT test data v0.1.6

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Patient 08**

## Example Patient: Patient 08

Profile: [ehealth-patient](http://ehealth.sundhed.dk/fhir/11.0.1/StructureDefinition-ehealth-patient.html)

Line Sørensen (official) Female, DoB: 1954-12-15 ( urn:oid:1.2.208.176.1.2#Danish civil registration system - CPR#1512543258 (use: official))

-------



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "p08",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient"]
  },
  "identifier" : [{
    "use" : "official",
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "1512543258"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Sørensen",
    "given" : ["Line"]
  }],
  "gender" : "female",
  "birthDate" : "1954-12-15"
}

```
