# Organization Synchronization Status - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Organization Synchronization Status**

## ValueSet: Organization Synchronization Status (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/organization-synchronization-status | *Version*:6.0.0 |
| Active as of 2019-06-24 | *Computable Name*:OrganizationSynchronizationStatus |

 
Value set used for indicating the organization synchronization status 

 **References** 

* [Organization Synchronization status](StructureDefinition-ehealth-organization-synchronizationStatus.md)

### Logical Definition (CLD)

* Include all codes defined in [`http://ehealth.sundhed.dk/cs/organization-synchronization-status`](CodeSystem-ehealth-organization-synchronization-status.md)version 📦6.0.0

 

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
  "id" : "ehealth-organization-synchronization-status",
  "url" : "http://ehealth.sundhed.dk/vs/organization-synchronization-status",
  "version" : "6.0.0",
  "name" : "OrganizationSynchronizationStatus",
  "title" : "Organization Synchronization Status",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-06-24T00:00:00+00:00",
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
  "description" : "Value set used for indicating the organization synchronization status",
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
        "system" : "http://ehealth.sundhed.dk/cs/organization-synchronization-status"
      }
    ]
  }
}

```
