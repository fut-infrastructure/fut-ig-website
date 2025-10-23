# intended-audience - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **intended-audience**

## SearchParameter: intended-audience 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/SearchParameter/Appointment/intended-audience | *Version*:6.0.0 |
| Active as of 2021-05-06 | *Computable Name*:intended-audience |

 
Search parameter for finding intended audience on Appointment 

## intended-audience

Parameter `intended-audience`:`reference`

Search parameter for finding intended audience on Appointment

| | |
| :--- | :--- |
| Resource | [Appointment](http://hl7.org/fhir/R4/appointment.html) |
| Expression | `Appointment.extension('http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-intendedAudience')` |
| Processing Mode | Normal |
| Multiples | * multipleAnd: It's up to the server whether the parameter may repeat in order to specify multiple values that must all be true
* multipleOr: It's up to the server whether the parameter can have multiple values (separated by comma) where at least one must be true
 |



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ehealth-appointment-search-intended-audience",
  "url" : "http://ehealth.sundhed.dk/fhir/SearchParameter/Appointment/intended-audience",
  "version" : "6.0.0",
  "name" : "intended-audience",
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
  "description" : "Search parameter for finding intended audience on Appointment",
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
  "code" : "intended-audience",
  "base" : ["Appointment"],
  "type" : "reference",
  "expression" : "Appointment.extension('http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-intendedAudience')",
  "xpathUsage" : "normal"
}

```
