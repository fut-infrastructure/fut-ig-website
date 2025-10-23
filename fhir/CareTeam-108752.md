# CareTeam/108752 - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CareTeam/108752**

## Example CareTeam: CareTeam/108752

version: 2

Profile: [ehealth-careteam](StructureDefinition-ehealth-careteam.md)

**status**: proposed

**name**: Example CareTeam

**reasonCode**: En beskrivelse af boligens fysiske rammer og omgivelser, der har betydning for borgerens hverdagsliv og funktionsevne.



## Resource Content

```json
{
  "resourceType" : "CareTeam",
  "id" : "108752",
  "meta" : {
    "versionId" : "2",
    "profile" : [
      "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam"
    ]
  },
  "status" : "proposed",
  "name" : "Example CareTeam",
  "reasonCode" : [
    {
      "coding" : [
        {
          "system" : "http://kl.dk/fhir/common/caresocial/CodeSystem/FSIII",
          "code" : "F12"
        }
      ],
      "text" : "En beskrivelse af boligens fysiske rammer og omgivelser, der har betydning for borgerens hverdagsliv og funktionsevne."
    }
  ]
}

```
