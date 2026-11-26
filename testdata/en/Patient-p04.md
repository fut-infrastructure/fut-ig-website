# Patient 04 - eHealth Infrastructure Test Data v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Patient 04**

## Example Patient: Patient 04

Profile: [ehealth-patient](http://ehealth.sundhed.dk/fhir/11.0.5/StructureDefinition-ehealth-patient.html)

Thomas Bonde (official) Male, DoB: 1963-11-13 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#1311633801 (use: official))

-------



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "p04",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient"]
  },
  "identifier" : [{
    "use" : "official",
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "1311633801"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Bonde",
    "given" : ["Thomas"]
  }],
  "gender" : "male",
  "birthDate" : "1963-11-13"
}

```
