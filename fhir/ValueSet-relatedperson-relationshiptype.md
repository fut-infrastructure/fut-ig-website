# RelationshipTypes - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **RelationshipTypes**

## ValueSet: RelationshipTypes (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/relatedperson-relationshiptype | *Version*:6.0.0 |
| Active as of 2019-02-02 | *Computable Name*:RelationshipTypes |

 
A set of codes that can be used to indicate the relationship between a Patient and a Related Person used in Denmark 

 **References** 

* [ehealth-relatedperson](StructureDefinition-ehealth-relatedperson.md)

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
  "id" : "relatedperson-relationshiptype",
  "url" : "http://ehealth.sundhed.dk/vs/relatedperson-relationshiptype",
  "version" : "6.0.0",
  "name" : "RelationshipTypes",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-02-02T00:00:00+00:00",
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
  "description" : "A set of codes that can be used to indicate the relationship between a Patient and a Related Person used in Denmark",
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
  "compose" : {
    "include" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
        "concept" : [
          {
            "code" : "FAMMEMB",
            "display" : "family member",
            "designation" : [
              {
                "language" : "da",
                "value" : "Øvrig familie"
              }
            ]
          },
          {
            "code" : "SIB",
            "display" : "sibling",
            "designation" : [
              {
                "language" : "da",
                "value" : "Søskende"
              }
            ]
          },
          {
            "code" : "DOMPART",
            "display" : "domestic partner",
            "designation" : [
              {
                "language" : "da",
                "value" : "Registreret partner"
              }
            ]
          },
          {
            "code" : "ROOM",
            "display" : "Roommate",
            "designation" : [
              {
                "language" : "da",
                "value" : "Samboende"
              }
            ]
          },
          {
            "code" : "U",
            "display" : "Unknown",
            "designation" : [
              {
                "language" : "da",
                "value" : "Uspecificeret pårørende"
              }
            ]
          },
          {
            "code" : "NBOR",
            "display" : "neighbor",
            "designation" : [
              {
                "language" : "da",
                "value" : "Nabo"
              }
            ]
          },
          {
            "code" : "CHLDINLAW",
            "display" : "child-in-law",
            "designation" : [
              {
                "language" : "da",
                "value" : "Svigerbarn"
              }
            ]
          },
          {
            "code" : "GRNDCHILD",
            "display" : "grandchild",
            "designation" : [
              {
                "language" : "da",
                "value" : "Barnebarn"
              }
            ]
          },
          {
            "code" : "PRN",
            "display" : "parent",
            "designation" : [
              {
                "language" : "da",
                "value" : "Forældre"
              }
            ]
          },
          {
            "code" : "O",
            "display" : "Other",
            "designation" : [
              {
                "language" : "da",
                "value" : "Ingen relationer"
              }
            ]
          },
          {
            "code" : "CHILD",
            "display" : "child",
            "designation" : [
              {
                "language" : "da",
                "value" : "Barn"
              }
            ]
          },
          {
            "code" : "SPS",
            "display" : "spouse",
            "designation" : [
              {
                "language" : "da",
                "value" : "Ægtefælle"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
