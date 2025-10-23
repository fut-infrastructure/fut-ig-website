# device - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **device**

## CapabilityStatement: device 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/CapabilityStatement/device | *Version*:6.0.0 |
| Active as of 2025-10-21 | *Computable Name*:device |

 [Raw OpenAPI-Swagger Definition file](device.openapi.json) | [Download](device.openapi.json) 

## 

* Implementation Guide Version: 6.0.0 
* FHIR Version: 4.0.1 
* Supported Formats: `application/fhir+xml`, `xml`, `application/fhir+json`, `json`, `application/x-turtle`, `ttl`, `html/json`, `html/xml`, `html/turtle`
* Published on: 2025-10-21 10:39:51+0000 
* Published by: Den telemedicinske infrastruktur (eHealth Infrastructure) 

> **Note to Implementers: FHIR Capabilities**Any FHIR capability may be 'allowed' by the system unless explicitly marked as 'SHALL NOT'. A few items are marked as MAY in the Implementation Guide to highlight their potential relevance to the use case.

## FHIR RESTful Capabilities

### Mode: server

Summary of System-wide Operations


### Capabilities by Resource/Profile

#### Summary

The summary table lists the resources that are part of this configuration, and for each resource it lists:

* The relevant profiles (if any)
* The interactions supported by each resource (**R**ead, **S**earch, **U**pdate, and **C**reate, are always shown, while **VR**ead, **P**atch, **D**elete, **H**istory on **I**nstance, or **H**istory on **T**ype are only present if at least one of the resources has support for them.
* The required, recommended, and some optional search parameters (if any).
* The linked resources enabled for `_include`
* The other resources enabled for `_revinclude`
* The operations on the resource (if any)

| | | | | | | | | | | |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| [Device](#Device1-1) | [http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device](StructureDefinition-ehealth-device.md) | y | y | y | y | y | _content, _has, _id, _language, _lastUpdated, _profile, _security, _tag, _text, device-name, identifier, location, manufacturer, model, organization, patient, status, type, udi-carrier, udi-di, url |  | `Device:location`,`Device:organization`,`Device:patient`,`DeviceMetric:parent`,`DeviceMetric:source`,`DeviceUseStatement:context`,`DeviceUseStatement:device`,`DeviceUseStatement:patient`,`DeviceUseStatement:subject` | `$validate` |
| [DeviceMetric](#DeviceMetric1-2) | [http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric](StructureDefinition-ehealth-devicemetric.md) | y | y | y | y | y | _content, _has, _id, _language, _lastUpdated, _profile, _security, _tag, _text, category, identifier, parent, qualityCategory, source, type | `DeviceMetric:source` | `Device:location`,`Device:organization`,`Device:patient`,`DeviceMetric:parent`,`DeviceMetric:source`,`DeviceUseStatement:context`,`DeviceUseStatement:device`,`DeviceUseStatement:patient`,`DeviceUseStatement:subject` |  |
| [DeviceUseStatement](#DeviceUseStatement1-3) | [http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement](StructureDefinition-ehealth-deviceusestatement.md) | y | y | y | y | y | _content, _has, _id, _language, _lastUpdated, _profile, _security, _tag, _text, context, device, identifier, patient, status, subject, timing | `DeviceUseStatement:device` | `Device:location`,`Device:organization`,`Device:patient`,`DeviceMetric:parent`,`DeviceMetric:source`,`DeviceUseStatement:context`,`DeviceUseStatement:device`,`DeviceUseStatement:patient`,`DeviceUseStatement:subject` | `$validate` |
| [OperationDefinition](#OperationDefinition1-4) | [http://hl7.org/fhir/StructureDefinition/OperationDefinition](http://hl7.org/fhir/R4/operationdefinition.html) | y |  |  |  |  |  | `*` | `Device:location`,`Device:organization`,`Device:patient`,`DeviceMetric:parent`,`DeviceMetric:source`,`DeviceUseStatement:context`,`DeviceUseStatement:device`,`DeviceUseStatement:patient`,`DeviceUseStatement:subject` |  |

-------

#### Resource Conformance: supported Device

Base System Profile

[ehealth-device](StructureDefinition-ehealth-device.md)

Profile Conformance

**SHALL**

Reference Policy

Interaction summary

* Supports `update`, `search-type`, `vread`, `read`, `create`.

Search Parameters


 

Extended Operations


#### Resource Conformance: supported DeviceMetric

Base System Profile

[ehealth-devicemetric](StructureDefinition-ehealth-devicemetric.md)

Profile Conformance

**SHALL**

Reference Policy

Interaction summary

* Supports `update`, `search-type`, `vread`, `read`, `create`.

Search Parameters


 

#### Resource Conformance: supported DeviceUseStatement

Base System Profile

[ehealth-deviceusestatement](StructureDefinition-ehealth-deviceusestatement.md)

Profile Conformance

**SHALL**

Reference Policy

Interaction summary

* Supports `update`, `search-type`, `vread`, `read`, `create`.

Search Parameters


 

Extended Operations


#### Resource Conformance: supported OperationDefinition

Base System Profile

[OperationDefinition](http://hl7.org/fhir/R4/operationdefinition.html)

Profile Conformance

**SHALL**

Reference Policy

Interaction summary

* Supports `read`.



## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "device",
  "url" : "http://ehealth.sundhed.dk/fhir/CapabilityStatement/device",
  "version" : "6.0.0",
  "name" : "device",
  "status" : "active",
  "date" : "2025-10-21T10:39:51.463+00:00",
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
  "kind" : "instance",
  "software" : {
    "name" : "device",
    "version" : "1.19.0"
  },
  "implementation" : {
    "description" : "eHealth device service",
    "url" : "https://device.devtest.systematic-ehealth.com/fhir"
  },
  "fhirVersion" : "4.0.1",
  "format" : [
    "application/fhir+xml",
    "xml",
    "application/fhir+json",
    "json",
    "application/x-turtle",
    "ttl",
    "html/json",
    "html/xml",
    "html/turtle"
  ],
  "rest" : [
    {
      "mode" : "server",
      "resource" : [
        {
          "type" : "Device",
          "profile" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device",
          "interaction" : [
            {
              "code" : "update"
            },
            {
              "code" : "search-type"
            },
            {
              "code" : "vread"
            },
            {
              "code" : "read"
            },
            {
              "code" : "create"
            }
          ],
          "conditionalCreate" : true,
          "conditionalUpdate" : true,
          "searchRevInclude" : [
            "Device:location",
            "Device:organization",
            "Device:patient",
            "DeviceMetric:parent",
            "DeviceMetric:source",
            "DeviceUseStatement:context",
            "DeviceUseStatement:device",
            "DeviceUseStatement:patient",
            "DeviceUseStatement:subject"
          ],
          "searchParam" : [
            {
              "name" : "_content",
              "type" : "string",
              "documentation" : "Search the contents of the resource's data using a fulltext search"
            },
            {
              "name" : "_has",
              "type" : "string",
              "documentation" : "Return resources linked to by the given target"
            },
            {
              "name" : "_id",
              "type" : "token",
              "documentation" : "The ID of the resource"
            },
            {
              "name" : "_language",
              "type" : "string",
              "documentation" : "The language of the resource"
            },
            {
              "name" : "_lastUpdated",
              "type" : "date",
              "documentation" : "Only return resources which were last updated as specified by the given range"
            },
            {
              "name" : "_profile",
              "type" : "uri",
              "documentation" : "Search for resources which have the given profile"
            },
            {
              "name" : "_security",
              "type" : "token",
              "documentation" : "Search for resources which have the given security labels"
            },
            {
              "name" : "_tag",
              "type" : "token",
              "documentation" : "Search for resources which have the given tag"
            },
            {
              "name" : "_text",
              "type" : "string",
              "documentation" : "Search the contents of the resource's narrative using a fulltext search"
            },
            {
              "name" : "device-name",
              "type" : "string",
              "documentation" : "A server defined search that may match any of the string fields in the Device.udi.name  or Device.type.coding.display or  Device.type.text"
            },
            {
              "name" : "identifier",
              "type" : "token",
              "documentation" : "Instance id from manufacturer, owner, and others"
            },
            {
              "name" : "location",
              "type" : "reference",
              "documentation" : "A location, where the resource is found"
            },
            {
              "name" : "manufacturer",
              "type" : "string",
              "documentation" : "The manufacturer of the device"
            },
            {
              "name" : "model",
              "type" : "string",
              "documentation" : "The model of the device"
            },
            {
              "name" : "organization",
              "type" : "reference",
              "documentation" : "The organization responsible for the device"
            },
            {
              "name" : "patient",
              "type" : "reference",
              "documentation" : "Patient information, if the resource is affixed to a person"
            },
            {
              "name" : "status",
              "type" : "token",
              "documentation" : "active | inactive | entered-in-error | unknown"
            },
            {
              "name" : "type",
              "type" : "token",
              "documentation" : "The type of the device"
            },
            {
              "name" : "udi-carrier",
              "type" : "string",
              "documentation" : "UDI Barcode (RFID or other technology) string either in HRF format or AIDC format converted to base64 string."
            },
            {
              "name" : "udi-di",
              "type" : "string",
              "documentation" : "The udi Device Identifier (DI)"
            },
            {
              "name" : "url",
              "type" : "uri",
              "documentation" : "Network address to contact device"
            }
          ],
          "operation" : [
            {
              "name" : "validate",
              "definition" : "https://device.devtest.systematic-ehealth.com/fhir/OperationDefinition/DeviceDeviceUseStatement-t-validate"
            }
          ]
        },
        {
          "type" : "DeviceMetric",
          "profile" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric",
          "interaction" : [
            {
              "code" : "update"
            },
            {
              "code" : "search-type"
            },
            {
              "code" : "vread"
            },
            {
              "code" : "read"
            },
            {
              "code" : "create"
            }
          ],
          "conditionalCreate" : true,
          "conditionalUpdate" : true,
          "searchInclude" : ["DeviceMetric:source"],
          "searchRevInclude" : [
            "Device:location",
            "Device:organization",
            "Device:patient",
            "DeviceMetric:parent",
            "DeviceMetric:source",
            "DeviceUseStatement:context",
            "DeviceUseStatement:device",
            "DeviceUseStatement:patient",
            "DeviceUseStatement:subject"
          ],
          "searchParam" : [
            {
              "name" : "_content",
              "type" : "string",
              "documentation" : "Search the contents of the resource's data using a fulltext search"
            },
            {
              "name" : "_has",
              "type" : "string",
              "documentation" : "Return resources linked to by the given target"
            },
            {
              "name" : "_id",
              "type" : "token",
              "documentation" : "The ID of the resource"
            },
            {
              "name" : "_language",
              "type" : "string",
              "documentation" : "The language of the resource"
            },
            {
              "name" : "_lastUpdated",
              "type" : "date",
              "documentation" : "Only return resources which were last updated as specified by the given range"
            },
            {
              "name" : "_profile",
              "type" : "uri",
              "documentation" : "Search for resources which have the given profile"
            },
            {
              "name" : "_security",
              "type" : "token",
              "documentation" : "Search for resources which have the given security labels"
            },
            {
              "name" : "_tag",
              "type" : "token",
              "documentation" : "Search for resources which have the given tag"
            },
            {
              "name" : "_text",
              "type" : "string",
              "documentation" : "Search the contents of the resource's narrative using a fulltext search"
            },
            {
              "name" : "category",
              "type" : "token",
              "documentation" : "The category of the metric"
            },
            {
              "name" : "identifier",
              "type" : "token",
              "documentation" : "The identifier of the metric"
            },
            {
              "name" : "parent",
              "type" : "reference",
              "documentation" : "The parent DeviceMetric resource"
            },
            {
              "name" : "qualityCategory",
              "type" : "token",
              "documentation" : "The device metric quality"
            },
            {
              "name" : "source",
              "type" : "reference",
              "documentation" : "The device resource"
            },
            {
              "name" : "type",
              "type" : "token",
              "documentation" : "The component type"
            }
          ]
        },
        {
          "type" : "DeviceUseStatement",
          "profile" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement",
          "interaction" : [
            {
              "code" : "update"
            },
            {
              "code" : "search-type"
            },
            {
              "code" : "vread"
            },
            {
              "code" : "read"
            },
            {
              "code" : "create"
            }
          ],
          "conditionalCreate" : true,
          "conditionalUpdate" : true,
          "searchInclude" : ["DeviceUseStatement:device"],
          "searchRevInclude" : [
            "Device:location",
            "Device:organization",
            "Device:patient",
            "DeviceMetric:parent",
            "DeviceMetric:source",
            "DeviceUseStatement:context",
            "DeviceUseStatement:device",
            "DeviceUseStatement:patient",
            "DeviceUseStatement:subject"
          ],
          "searchParam" : [
            {
              "name" : "_content",
              "type" : "string",
              "documentation" : "Search the contents of the resource's data using a fulltext search"
            },
            {
              "name" : "_has",
              "type" : "string",
              "documentation" : "Return resources linked to by the given target"
            },
            {
              "name" : "_id",
              "type" : "token",
              "documentation" : "The ID of the resource"
            },
            {
              "name" : "_language",
              "type" : "string",
              "documentation" : "The language of the resource"
            },
            {
              "name" : "_lastUpdated",
              "type" : "date",
              "documentation" : "Only return resources which were last updated as specified by the given range"
            },
            {
              "name" : "_profile",
              "type" : "uri",
              "documentation" : "Search for resources which have the given profile"
            },
            {
              "name" : "_security",
              "type" : "token",
              "documentation" : "Search for resources which have the given security labels"
            },
            {
              "name" : "_tag",
              "type" : "token",
              "documentation" : "Search for resources which have the given tag"
            },
            {
              "name" : "_text",
              "type" : "string",
              "documentation" : "Search the contents of the resource's narrative using a fulltext search"
            },
            {
              "name" : "context",
              "type" : "reference",
              "documentation" : "Search by context"
            },
            {
              "name" : "device",
              "type" : "reference",
              "documentation" : "Search by device"
            },
            {
              "name" : "identifier",
              "type" : "token",
              "documentation" : "Search by identifier"
            },
            {
              "name" : "patient",
              "type" : "reference",
              "documentation" : "Search by subject - a patient"
            },
            {
              "name" : "status",
              "type" : "token",
              "documentation" : "active | completed | entered-in-error +"
            },
            {
              "name" : "subject",
              "type" : "reference",
              "documentation" : "Search by subject"
            },
            {
              "name" : "timing",
              "type" : "date",
              "documentation" : "Period device was used"
            }
          ],
          "operation" : [
            {
              "name" : "validate",
              "definition" : "https://device.devtest.systematic-ehealth.com/fhir/OperationDefinition/DeviceDeviceUseStatement-t-validate"
            }
          ]
        },
        {
          "type" : "OperationDefinition",
          "profile" : "http://hl7.org/fhir/StructureDefinition/OperationDefinition",
          "interaction" : [
            {
              "code" : "read"
            }
          ],
          "searchInclude" : ["*"],
          "searchRevInclude" : [
            "Device:location",
            "Device:organization",
            "Device:patient",
            "DeviceMetric:parent",
            "DeviceMetric:source",
            "DeviceUseStatement:context",
            "DeviceUseStatement:device",
            "DeviceUseStatement:patient",
            "DeviceUseStatement:subject"
          ]
        }
      ],
      "operation" : [
        {
          "name" : "migrate",
          "definition" : "https://device.devtest.systematic-ehealth.com/fhir/OperationDefinition/-s-migrate",
          "documentation" : "Data migration"
        },
        {
          "name" : "reindex-terminology",
          "definition" : "https://device.devtest.systematic-ehealth.com/fhir/OperationDefinition/-s-reindex-terminology"
        },
        {
          "name" : "meta",
          "definition" : "https://device.devtest.systematic-ehealth.com/fhir/OperationDefinition/-s-meta"
        },
        {
          "name" : "get-resource-counts",
          "definition" : "https://device.devtest.systematic-ehealth.com/fhir/OperationDefinition/-s-get-resource-counts",
          "documentation" : "Provides the number of resources currently stored on the server, broken down by resource type"
        }
      ]
    }
  ]
}

```
