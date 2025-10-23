# 291 - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **291**

## Example Patient: 291

version: 1

Profile: [ehealth-skrs-patient](StructureDefinition-ehealth-skrs-patient.md)

Anonymous Patient (no stated gender), DoB Unknown ( urn:oid:1.2.208.176.1.2#Danish civil registration system - CPR#1908560343 (use: official, ))

-------

| | |
| :--- | :--- |
| Contact Detail | Aalborg (home) |
| [Name and address protection](StructureDefinition-ehealth-nameandaddressprotection.md) | 2021-08-19 15:22:44+0200 --> 2021-08-23 15:22:44+0200 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "291",
  "meta" : {
    "versionId" : "1",
    "profile" : [
      "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-skrs-patient"
    ]
  },
  "extension" : [
    {
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-nameandaddressprotection",
      "valuePeriod" : {
        "start" : "2021-08-19T15:22:44+02:00",
        "end" : "2021-08-23T15:22:44+02:00"
      }
    }
  ],
  "identifier" : [
    {
      "use" : "official",
      "system" : "urn:oid:1.2.208.176.1.2",
      "value" : "1908560343"
    }
  ],
  "address" : [
    {
      "use" : "home",
      "city" : "Aalborg"
    }
  ]
}

```
