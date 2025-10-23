# Device Types - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Device Types**

## ValueSet: Device Types (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/device-types | *Version*:6.0.0 |
| Active as of 2019-02-08 | *Computable Name*:DeviceTypes |

 
Device Types value set. 

 **References** 

* [ehealth-device](StructureDefinition-ehealth-device.md)
* [IT competence level](StructureDefinition-ehealth-itcompetencelevel.md)

### Logical Definition (CLD)

 

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
  "id" : "ehealth-device-types",
  "url" : "http://ehealth.sundhed.dk/vs/device-types",
  "version" : "6.0.0",
  "name" : "DeviceTypes",
  "title" : "Device Types",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-02-08T00:00:00+00:00",
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
  "description" : "Device Types value set.",
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
        "system" : "http://snomed.info/sct",
        "concept" : [
          {
            "code" : "59181002",
            "display" : "Oxygen analyser",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Oxygen analyser"
              }
            ]
          },
          {
            "code" : "258057004",
            "display" : "ikke-invasiv blodtryksmonitor"
          },
          {
            "code" : "19892000",
            "display" : "Vægt"
          }
        ]
      }
    ]
  }
}

```
