# RelationshipTypes - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **RelationshipTypes**

## ValueSet: (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/relatedperson-relationshiptype | *Version*:11.0.3 |
| Active as of 2019-02-02 | *Computable Name*:RelationshipTypes |

 
A set of codes that can be used to indicate the relationship between a Patient and a Related Person used in Denmark. Including the specific permissions granted to the Related Person in the context of a Power of Attorney relationship. 

 **References** 

* [ehealth-relatedperson](StructureDefinition-ehealth-relatedperson.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "relatedperson-relationshiptype",
  "url" : "http://ehealth.sundhed.dk/vs/relatedperson-relationshiptype",
  "version" : "11.0.3",
  "name" : "RelationshipTypes",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-02-02T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "A set of codes that can be used to indicate the relationship between a Patient and a Related Person used in Denmark. Including the specific permissions granted to the Related Person in the context of a Power of Attorney relationship.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
      "version" : "4.0.0",
      "concept" : [{
        "code" : "FAMMEMB"
      },
      {
        "code" : "SIB"
      },
      {
        "code" : "DOMPART"
      },
      {
        "code" : "ROOM"
      },
      {
        "code" : "U"
      },
      {
        "code" : "NBOR"
      },
      {
        "code" : "CHLDINLAW"
      },
      {
        "code" : "GRNDCHILD"
      },
      {
        "code" : "PRN"
      },
      {
        "code" : "O"
      },
      {
        "code" : "CHILD"
      },
      {
        "code" : "SPS"
      },
      {
        "code" : "POWATT"
      }]
    },
    {
      "system" : "http://hl7.dk/fhir/core/CodeSystem/dk-relatedperson-relationshipcodes",
      "concept" : [{
        "code" : "PARAUTH"
      }]
    },
    {
      "system" : "http://ehealth.sundhed.dk/cs/poa-privilege"
    }]
  }
}

```
