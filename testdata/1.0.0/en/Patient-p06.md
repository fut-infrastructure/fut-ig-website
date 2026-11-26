# Patient 06 - eHealth Infrastructure Test Data v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Patient 06**

## Example Patient: Patient 06

Profile: [ehealth-patient](http://ehealth.sundhed.dk/fhir/11.0.5/StructureDefinition-ehealth-patient.html)

Andreas Bonde (official) Male, DoB: 1996-07-12 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#1207969563 (use: official))

-------



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "p06",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient"]
  },
  "identifier" : [{
    "use" : "official",
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "1207969563"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Bonde",
    "given" : ["Andreas"]
  }],
  "gender" : "male",
  "birthDate" : "1996-07-12"
}

```
