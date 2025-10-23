# ehealth-device - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-device**

## Resource Profile: ehealth-device 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-device |

# Introduction

This resource identifies a specific instance of a manufactured item that is used in the provision of healthcare without being substantially changed through that activity. The device may be a medical or non-medical device. Medical devices include durable (reusable) medical equipment, implantable devices, as well as disposable equipment used for diagnostic, treatment, and research for healthcare and public health. Non-medical devices may include items such as a machine, cellphone, computer, application, etc.

Because the Device resource represents a specific instance of a Device, it must have at least one identifier, such as a serial no., which together with the manufacturer and model uniquely identifies the device instance.

Each Device can be related to a number of suppliers with different roles; such as e.g. the provisioner, and suppliers of user training, maintenance, or decommissioning of the device.

# Scope and Usage

In eHealth Devices are registered as FHIR resources when they are actively used in a current CarePlan for a Patient. The relation between a CarePlan and a Device is represented by a DeviceUseStatement resource.

The main purpose of registering a specific Device to a Patient through a CarePlan is purely clinical; not logistical. If for example at some point it is determined that a specific device has yielded erroneous or biased measurements, it may be important to track which patients have used this device.

Device resources are created and updated automatically based on actions and information provided in the Service, Support & Logistics (SSL) domain of the eHealth Infrastructure. The use of Device therefore concerns reading and searching only.

### Life cycle

The SSL services manage the lifecycle of Device resources. When the SSL services receive a message that a device has been delivered to a patient, then the SSL services create a Device resource and relate it to the Patient's CarePlan through a DeviceUseStatement.

### Privately owned devices

Bring your own device (BYOD), where the patient provides the device him or herself, is indicated with the extension `Device.privatelyOwned` being set to `true`. In all other cases, it is set to `null` or `false`.

**Usages:**

* Refer to this Profile: [ehealth-communication](StructureDefinition-ehealth-communication.md), [ehealth-composition](StructureDefinition-ehealth-composition.md), [ehealth-devicemetric](StructureDefinition-ehealth-devicemetric.md), [ehealth-deviceusestatement](StructureDefinition-ehealth-deviceusestatement.md)...Show 9 more,[ehealth-documentreference](StructureDefinition-ehealth-documentreference.md),[ehealth-guidanceresponse](StructureDefinition-ehealth-guidanceresponse.md),[ehealth-media](StructureDefinition-ehealth-media.md),[ehealth-observation](StructureDefinition-ehealth-observation.md),[ehealth-provenance](StructureDefinition-ehealth-provenance.md),[ehealth-questionnaireresponse](StructureDefinition-ehealth-questionnaireresponse.md),[ehealth-servicerequest](StructureDefinition-ehealth-servicerequest.md),[ehealth-task](StructureDefinition-ehealth-task.md)and[ehealth-transformation-documentreference](StructureDefinition-ehealth-transformation-documentreference.md)
* CapabilityStatements using this Profile: [device](CapabilityStatement-device.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-device)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-device.csv), [Excel](StructureDefinition-ehealth-device.xlsx), [Schematron](StructureDefinition-ehealth-device.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-device",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device",
  "version" : "6.0.0",
  "name" : "ehealth-device",
  "status" : "active",
  "date" : "2025-10-23T10:34:08+00:00",
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
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "udi",
      "uri" : "http://fda.gov/UDI",
      "name" : "UDI Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Device",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Device",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Device",
        "path" : "Device"
      },
      {
        "id" : "Device.extension",
        "path" : "Device.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Device.extension:privatelyOwned",
        "path" : "Device.extension",
        "sliceName" : "privatelyOwned",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned"
            ]
          }
        ]
      },
      {
        "id" : "Device.extension:suppliers",
        "path" : "Device.extension",
        "sliceName" : "suppliers",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-suppliers"
            ]
          }
        ]
      },
      {
        "id" : "Device.status",
        "path" : "Device.status",
        "min" : 1
      },
      {
        "id" : "Device.type",
        "path" : "Device.type",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/device-types"
        }
      },
      {
        "id" : "Device.patient",
        "path" : "Device.patient",
        "max" : "0"
      },
      {
        "id" : "Device.owner",
        "path" : "Device.owner",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "Device.note.author[x]",
        "path" : "Device.note.author[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Device.note.author[x]:authorReference",
        "path" : "Device.note.author[x]",
        "sliceName" : "authorReference",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson"
            ]
          }
        ]
      },
      {
        "id" : "Device.note.author[x]:authorString",
        "path" : "Device.note.author[x]",
        "sliceName" : "authorString",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ]
      }
    ]
  }
}

```
