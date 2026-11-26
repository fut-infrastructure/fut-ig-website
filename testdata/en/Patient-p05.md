# Patient 05 - eHealth Infrastructure Test Data v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Patient 05**

## Example Patient: Patient 05

Profile: [ehealth-patient](http://ehealth.sundhed.dk/fhir/11.0.5/StructureDefinition-ehealth-patient.html)

Grete Kristensen (official) Female, DoB: 1989-12-05 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#0512894992 (use: official))

-------



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "p05",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient"]
  },
  "identifier" : [{
    "use" : "official",
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "0512894992"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Kristensen",
    "given" : ["Grete"]
  }],
  "gender" : "female",
  "birthDate" : "1989-12-05"
}

```
