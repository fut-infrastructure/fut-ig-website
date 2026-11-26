# Patient 03 - eHealth Infrastructure Test Data v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Patient 03**

## Example Patient: Patient 03

Profile: [ehealth-patient](http://ehealth.sundhed.dk/fhir/11.0.5/StructureDefinition-ehealth-patient.html)

Mette Kristensen (official) Female, DoB: 1958-12-24 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#2412589206 (use: official))

-------



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "p03",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient"]
  },
  "identifier" : [{
    "use" : "official",
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "2412589206"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Kristensen",
    "given" : ["Mette"]
  }],
  "gender" : "female",
  "birthDate" : "1958-12-24"
}

```
