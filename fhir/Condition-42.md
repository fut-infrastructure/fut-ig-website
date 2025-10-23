# Condition/42 - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Condition/42**

## Example Condition: Condition/42

version: 2

Profile: [ehealth-condition](StructureDefinition-ehealth-condition.md)

**code**: En beskrivelse af boligens fysiske rammer og omgivelser, der har betydning for borgerens hverdagsliv og funktionsevne.

**subject**: [Nancy Ann Berggren (official) Ukendt, DoB Unknown ( urn:oid:1.2.208.176.1.2#Danish civil registration system - CPR#2512489996 (use: official, ))](Patient-102.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "42",
  "meta" : {
    "versionId" : "2",
    "profile" : [
      "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-condition"
    ]
  },
  "code" : {
    "coding" : [
      {
        "system" : "http://kl.dk/fhir/common/caresocial/CodeSystem/FSIII",
        "code" : "F12"
      }
    ],
    "text" : "En beskrivelse af boligens fysiske rammer og omgivelser, der har betydning for borgerens hverdagsliv og funktionsevne."
  },
  "subject" : {
    "reference" : "Patient/102"
  }
}

```
