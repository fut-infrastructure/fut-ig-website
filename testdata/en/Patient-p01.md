# Patient 01 - FUT test data v0.1.6

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Patient 01**

## Example Patient: Patient 01

Profile: [ehealth-patient](http://ehealth.sundhed.dk/fhir/11.0.1/StructureDefinition-ehealth-patient.html)

Sonja Knudsen (official) Female, DoB: 1975-08-05 ( urn:oid:1.2.208.176.1.2#Danish civil registration system - CPR#0508754760 (use: official))

-------



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "p01",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient"]
  },
  "identifier" : [{
    "use" : "official",
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "0508754760"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Knudsen",
    "given" : ["Sonja"]
  }],
  "gender" : "female",
  "birthDate" : "1975-08-05"
}

```
