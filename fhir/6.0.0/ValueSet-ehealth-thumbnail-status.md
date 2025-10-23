# Thumbnail Status - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Thumbnail Status**

## ValueSet: Thumbnail Status 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/thumbnail-status | *Version*:6.0.0 |
| Active as of 2024-10-28 | *Computable Name*:ThumbnailStatus |

 
Thumbnail status is a value set for the status of low resolution media representations. 

 **References** 

* [Media Thumbnail representation](StructureDefinition-ehealth-media-thumbnail.md)

### Logical Definition (CLD)

* Include all codes defined in [`http://ehealth.sundhed.dk/cs/thumbnail-status`](CodeSystem-ehealth-thumbnail-status.md)version 📦6.0.0

 

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
  "id" : "ehealth-thumbnail-status",
  "url" : "http://ehealth.sundhed.dk/vs/thumbnail-status",
  "version" : "6.0.0",
  "name" : "ThumbnailStatus",
  "title" : "Thumbnail Status",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-10-28T10:02:00+02:00",
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
  "description" : "Thumbnail status is a value set for the status of low resolution media representations.",
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
        "system" : "http://ehealth.sundhed.dk/cs/thumbnail-status"
      }
    ]
  }
}

```
