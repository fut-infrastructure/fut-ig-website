# careteamParticipant - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **careteamParticipant**

## SearchParameter: careteamParticipant 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/SearchParameter/Appointment/careteamParticipant | *Version*:6.0.0 |
| Active as of 2021-05-06 | *Computable Name*:careteamParticipant |

 
Search parameter for finding appointments based on careteam participants 

## careteamParticipant

Parameter `careteamParticipant`:`reference`

Search parameter for finding appointments based on careteam participants

| | |
| :--- | :--- |
| Resource | [Appointment](http://hl7.org/fhir/R4/appointment.html) |
| Expression | `Appointment.participant.extension('http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-ext-careteam')` |
| Processing Mode | Normal |
| Multiples | * multipleAnd: It's up to the server whether the parameter may repeat in order to specify multiple values that must all be true
* multipleOr: It's up to the server whether the parameter can have multiple values (separated by comma) where at least one must be true
 |



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ehealth-appointment-search-careteam-participant",
  "url" : "http://ehealth.sundhed.dk/fhir/SearchParameter/Appointment/careteamParticipant",
  "version" : "6.0.0",
  "name" : "careteamParticipant",
  "status" : "active",
  "date" : "2021-05-06T08:31:20+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [
    {
      "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://ehealth.sundhed.dk"
        }
      ]
    }
  ],
  "description" : "Search parameter for finding appointments based on careteam participants",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "DK",
          "display" : "Denmark"
        }
      ]
    }
  ],
  "code" : "careteamParticipant",
  "base" : ["Appointment"],
  "type" : "reference",
  "expression" : "Appointment.participant.extension('http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-ext-careteam')",
  "xpathUsage" : "normal"
}

```
