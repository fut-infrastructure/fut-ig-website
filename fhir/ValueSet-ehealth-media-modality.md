# Media modality - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Media modality**

## ValueSet: Media modality 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/media-modality | *Version*:6.0.0 |
| Active as of 2024-10-21 | *Computable Name*:MediaModality |

 
Media modality 

 **References** 

* [ehealth-media](StructureDefinition-ehealth-media.md)

### Logical Definition (CLD)

* Import all the codes that are contained in [Media Modality](http://hl7.org/fhir/R4/valueset-media-modality.html)

 

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
  "id" : "ehealth-media-modality",
  "url" : "http://ehealth.sundhed.dk/vs/media-modality",
  "version" : "6.0.0",
  "name" : "MediaModality",
  "title" : "Media modality",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-10-21T00:00:00+00:00",
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
  "description" : "Media modality",
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
        "valueSet" : ["http://hl7.org/fhir/ValueSet/media-modality"]
      }
    ]
  }
}

```
