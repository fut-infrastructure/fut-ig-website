# ehealth-devicemetric - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-devicemetric**

## Resource Profile: ehealth-devicemetric 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-devicemetric |

# Introduction

This resource describes qualities and other properties related to a Device. In addition it can describe a measurement, calculation or setting capability of the device.

# Scope and Usage

In scope of the eHealth Infrastructure, the DeviceMetric resource is used for:

* additional properties pertaining to the referenced Device, for instance, properties specifying simplicity of use, language, size and so on. These properties are captured through a generic structure based on a property type and value in the extension properties.
* setting of device quality

DeviceMetric resources are created and updated automatically based on actions and information provided in the Service, Support & Logistics (SSL) domain of the eHealth Infrastructure. The use of DeviceMetric therefore concerns reading and searching only.

### Device quality settings

The quality of the device can be expressed in a number of ways:

* through calibration information (which may or may not apply to a particular kind of device) - specifying the last time of calibration and possibly when the calibration expires. Expiration of calibration, specified through the extension calibration.expires, is when the device quality cannot be determined by its calibration information.
* an initial device quality
* a degraded device quality value
* an overridden device quality

The current quality of the Device is `DeviceMetric.quality`.

The default values for initial, degraded, and overridden quality are kept in `DeviceMetric.templateQualities`.

Historic values and periods of `DeviceMetric.quality` are kept in `DeviceMetric.qualityHistory`. This history is maintained by the eHealth Infrastructure.

If the device is of a kind where calibration influences the device quality, and once the calibration has expired, the device quality will be based on the degraded quality value. Once the device has been calibrated (and a new calibration expiry has been set), the device quality is based on the initial device quality.

At any time, a Practitioner can set which of the initial, degraded and overridden device quality shall be used as current.

### Life cycle

In most cases DeviceMetric resources are created by the SSL subsystem when a Device is signalled to be in use by a Patient.

The initial values of device quality is set from values in the SSL catalogue.

**Usages:**

* Refer to this Profile: [ehealth-media](StructureDefinition-ehealth-media.md)
* CapabilityStatements using this Profile: [device](CapabilityStatement-device.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-devicemetric)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-devicemetric.csv), [Excel](StructureDefinition-ehealth-devicemetric.xlsx), [Schematron](StructureDefinition-ehealth-devicemetric.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-devicemetric",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric",
  "version" : "6.0.0",
  "name" : "ehealth-devicemetric",
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
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "DeviceMetric",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/DeviceMetric",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "DeviceMetric",
        "path" : "DeviceMetric"
      },
      {
        "id" : "DeviceMetric.extension",
        "path" : "DeviceMetric.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "min" : 4
      },
      {
        "id" : "DeviceMetric.extension:properties",
        "path" : "DeviceMetric.extension",
        "sliceName" : "properties",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-properties"
            ]
          }
        ]
      },
      {
        "id" : "DeviceMetric.extension:qualities",
        "path" : "DeviceMetric.extension",
        "sliceName" : "qualities",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities"
            ]
          }
        ]
      },
      {
        "id" : "DeviceMetric.extension:qualitiyHistory",
        "path" : "DeviceMetric.extension",
        "sliceName" : "qualitiyHistory",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualityHistory"
            ]
          }
        ]
      },
      {
        "id" : "DeviceMetric.extension:templateQualities",
        "path" : "DeviceMetric.extension",
        "sliceName" : "templateQualities",
        "min" : 3,
        "max" : "3",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities"
            ]
          }
        ]
      },
      {
        "id" : "DeviceMetric.type",
        "path" : "DeviceMetric.type",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/device-measurement-unit"
        }
      },
      {
        "id" : "DeviceMetric.unit",
        "path" : "DeviceMetric.unit",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/device-measurement-unit"
        }
      },
      {
        "id" : "DeviceMetric.source",
        "path" : "DeviceMetric.source",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "DeviceMetric.parent",
        "path" : "DeviceMetric.parent",
        "max" : "0"
      },
      {
        "id" : "DeviceMetric.calibration.extension",
        "path" : "DeviceMetric.calibration.extension",
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
        "id" : "DeviceMetric.calibration.extension:calibrationExpires",
        "path" : "DeviceMetric.calibration.extension",
        "sliceName" : "calibrationExpires",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-calibrationExpires"
            ]
          }
        ]
      }
    ]
  }
}

```
