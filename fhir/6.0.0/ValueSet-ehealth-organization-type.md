# Organization Type - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Organization Type**

## ValueSet: Organization Type (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/organization-type | *Version*:6.0.0 |
| Active as of 2019-05-27 | *Computable Name*:OrganizationType |

 
Value set used for indicating the organization type 

 **References** 

* [ehealth-organization](StructureDefinition-ehealth-organization.md)

### Logical Definition (CLD)

This value set includes codes based on the following rules:

* Import all the codes that are contained in [SorOrganizationType](ValueSet-ehealth-sor-organization-type.md)
* Import all the codes that are contained in [OIO Organization Type](ValueSet-ehealth-oio-organization-type.md)

 

### Expansion

No Expansion for this valueset (not supported by Publication Tooling)

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
  "id" : "ehealth-organization-type",
  "url" : "http://ehealth.sundhed.dk/vs/organization-type",
  "version" : "6.0.0",
  "name" : "OrganizationType",
  "title" : "Organization Type",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-05-27T00:00:00+00:00",
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
  "description" : "Value set used for indicating the organization type",
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
        "valueSet" : ["http://ehealth.sundhed.dk/vs/sor-organization-type"]
      },
      {
        "valueSet" : ["http://ehealth.sundhed.dk/vs/oio-organization-type"]
      }
    ]
  }
}

```
