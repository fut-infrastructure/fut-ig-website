# Conditions - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Conditions**

## ValueSet: Conditions 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/conditions | *Version*:10.0.1 |
| Active as of 2019-02-08 | *Computable Name*:Conditions |

 
Conditions. 

 **References** 

* Included into [AllConditions](ValueSet-ehealth-treatment-area-xa-1.md)
* [ehealth-careteam](StructureDefinition-ehealth-careteam.md)
* [ehealth-condition](StructureDefinition-ehealth-condition.md)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-conditions",
  "url" : "http://ehealth.sundhed.dk/vs/conditions",
  "version" : "10.0.1",
  "name" : "Conditions",
  "title" : "Conditions",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-02-08T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Conditions.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "urn:oid:1.2.208.176.2.4",
      "concept" : [{
        "code" : "ALAL03"
      },
      {
        "code" : "DE10"
      },
      {
        "code" : "DE11"
      },
      {
        "code" : "DF00"
      },
      {
        "code" : "DF10"
      },
      {
        "code" : "DF20"
      },
      {
        "code" : "DF30"
      },
      {
        "code" : "DF320"
      },
      {
        "code" : "DF321"
      },
      {
        "code" : "DF330"
      },
      {
        "code" : "DF331"
      },
      {
        "code" : "DF40"
      },
      {
        "code" : "DF400"
      },
      {
        "code" : "DF4000"
      },
      {
        "code" : "DF4001"
      },
      {
        "code" : "DF401"
      },
      {
        "code" : "DF402"
      },
      {
        "code" : "DF410"
      },
      {
        "code" : "DF50"
      },
      {
        "code" : "DF60"
      },
      {
        "code" : "DF70"
      },
      {
        "code" : "DF80"
      },
      {
        "code" : "DF90"
      },
      {
        "code" : "DF99"
      },
      {
        "code" : "DF999"
      },
      {
        "code" : "DG20"
      },
      {
        "code" : "DG834B"
      },
      {
        "code" : "DI20"
      },
      {
        "code" : "DI25"
      },
      {
        "code" : "DI340"
      },
      {
        "code" : "DI350"
      },
      {
        "code" : "DI48"
      },
      {
        "code" : "DI50"
      },
      {
        "code" : "DI511A"
      },
      {
        "code" : "DI719A"
      },
      {
        "code" : "DI739A"
      },
      {
        "code" : "DJ44"
      },
      {
        "code" : "DJ45"
      },
      {
        "code" : "DM16"
      },
      {
        "code" : "DM17"
      },
      {
        "code" : "DM54"
      },
      {
        "code" : "DQ231"
      },
      {
        "code" : "DQ231A"
      },
      {
        "code" : "DQ251"
      },
      {
        "code" : "DZ032"
      },
      {
        "code" : "DZ718"
      },
      {
        "code" : "DZ76"
      },
      {
        "code" : "DZ952"
      }]
    },
    {
      "system" : "http://snomed.info/sct",
      "concept" : [{
        "code" : "413307004"
      }]
    },
    {
      "system" : "http://kl.dk/fhir/common/caresocial/CodeSystem/FSIII",
      "filter" : [{
        "property" : "concept",
        "op" : "is-a",
        "value" : "F"
      }]
    },
    {
      "system" : "http://kl.dk/fhir/common/caresocial/CodeSystem/FSIII",
      "filter" : [{
        "property" : "concept",
        "op" : "is-a",
        "value" : "J1"
      }]
    },
    {
      "system" : "http://kl.dk/fhir/common/caresocial/CodeSystem/FSIII",
      "filter" : [{
        "property" : "concept",
        "op" : "is-a",
        "value" : "J2"
      }]
    },
    {
      "system" : "http://kl.dk/fhir/common/caresocial/CodeSystem/FSIII",
      "filter" : [{
        "property" : "concept",
        "op" : "is-a",
        "value" : "J3"
      }]
    },
    {
      "system" : "http://kl.dk/fhir/common/caresocial/CodeSystem/FSIII",
      "filter" : [{
        "property" : "concept",
        "op" : "is-a",
        "value" : "J4"
      }]
    },
    {
      "system" : "http://kl.dk/fhir/common/caresocial/CodeSystem/FSIII",
      "filter" : [{
        "property" : "concept",
        "op" : "is-a",
        "value" : "J5"
      }]
    },
    {
      "system" : "http://kl.dk/fhir/common/caresocial/CodeSystem/FSIII",
      "concept" : [{
        "code" : "I3.4"
      },
      {
        "code" : "I6.4"
      },
      {
        "code" : "I7.2"
      },
      {
        "code" : "I9.3"
      }]
    },
    {
      "valueSet" : ["http://ehealth.sundhed.dk/vs/wound-conditions"]
    }]
  }
}

```
