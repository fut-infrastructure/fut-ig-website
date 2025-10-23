# Thumbnail Size Category - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Thumbnail Size Category**

## ValueSet: Thumbnail Size Category 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/thumbnail-size-category | *Version*:6.0.0 |
| Active as of 2024-10-28 | *Computable Name*:ThumbnailSizeCategory |

 
Thumbnail size is a value set with the available sizes of low resolution media representations. 

 **References** 

* [Media Thumbnail representation](StructureDefinition-ehealth-media-thumbnail.md)

### Logical Definition (CLD)

* Include all codes defined in [`http://ehealth.sundhed.dk/cs/thumbnail-size-category`](CodeSystem-ehealth-thumbnail-size.md)version 📦6.0.0

 

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
  "id" : "ehealth-thumbnail-size-category",
  "url" : "http://ehealth.sundhed.dk/vs/thumbnail-size-category",
  "version" : "6.0.0",
  "name" : "ThumbnailSizeCategory",
  "title" : "Thumbnail Size Category",
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
  "description" : "Thumbnail size is a value set with the available sizes of low resolution media representations.",
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
        "system" : "http://ehealth.sundhed.dk/cs/thumbnail-size-category"
      }
    ]
  }
}

```
