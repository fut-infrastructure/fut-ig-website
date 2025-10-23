# Home - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* **Home**

## Home

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/ImplementationGuide/dk.ehealth.sundhed.fhir.ig.core | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:eHealthInfrastructure |

### Introduction

This implementation guide is provided to support the use of FHIR®© in the Danish national eHealth Infrastructure context.

This document is a specification that reflects the capabilities of the FHIR®©-infrastructural part of the eHealth Infrastructure.

### Scope

This document presents Danish use concepts defined via FHIR processable artifacts; these are outputs with agreed approaches to varied kinds of healthcare related information based on the core FHIR R4 specification.

* [Profiles](profiles.md) - are constraints of core FHIR resources and datatype for use in the eHealth Infrastructure
* [Extensions](extensions.md) - are FHIR extensions that are added for local use, covering needed concepts of the eHealth Infrastructure
* [Terminologies](terminology.md) - are defined or referenced code systems and value sets for the context of the eHealth Infrastructure

FHIR profiles are managed under the constellation of the Danish municipalities and regions:

* [Danish regions](https://regioner.dk/)
* [Danish municipalities](https://kl.dk/)

### Conformance Requirements

The Capability Statements Section outlines the conformance requirements for the eHealth Infrastructure Core Servers and Client applications, identifying the specific profiles that need to be supported, the specific RESTful operations that need to be supported, and the search parameters that need to be supported.

Due to a defect in the tool that generates the implementation guide, the table of exposed operations on each resource is not correct. For a list of operations supported per FHIR resource, please consult the capability statement of the particular server. Displaying the capability statement as either XML or JSON, the operations can be found in the interaction element of each resource.

### Collaboration

This guide is the product of collaborative work undertaken with participants from:

* [Systematic A/S](https://systematic.com/)
* [Trifork A/S](https://trifork.com/)

### Note to FHIR Newcomers

If you are new to FHIR (Fast Healthcare Interoperability Resources), consider to head over to the FHIR specification at [http://hl7.org/fhir/R4/](http://hl7.org/fhir/R4/) and study it at your own pace. In particular, check out the following links:

* Summary: [http://hl7.org/fhir/R4/summary.html](http://hl7.org/fhir/R4/summary.html)
* Developers intro: [http://hl7.org/fhir/R4/overview-dev.html](http://hl7.org/fhir/R4/overview-dev.html)
* Clinical intro: [http://hl7.org/fhir/R4/overview-clinical.html](http://hl7.org/fhir/R4/overview-clinical.html)
* Architects intro: [http://hl7.org/fhir/R4/overview-arch.html](http://hl7.org/fhir/R4/overview-arch.html)

Great FHIR exercises and tutorials can be found at [https://fhir-drills.github.io/](https://fhir-drills.github.io/) and [https://simplifier.net/guide/ProfilingAcademy/](https://simplifier.net/guide/ProfilingAcademy/)

### Reader's Guide

The intended audience of the implementation guide is IT architects, developers and testers who are seeking to understand the available resources in the eHealth Infrastructure and how they can be used.

* In general, business validation rules have not been described.
* Value sets and code systems should be expected to mature over time.



## Resource Content

```json
{
  "resourceType" : "ImplementationGuide",
  "id" : "dk.ehealth.sundhed.fhir.ig.core",
  "url" : "http://ehealth.sundhed.dk/fhir/ImplementationGuide/dk.ehealth.sundhed.fhir.ig.core",
  "version" : "6.0.0",
  "name" : "eHealthInfrastructure",
  "title" : "eHealth Infrastructure",
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
  "description" : "The Danish eHealth Infrastructure Implementation Guide defines a set of FHIR profiles with extensions and bindings needed to create interoperable, quality-focused applications.",
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
  "packageId" : "dk.ehealth.sundhed.fhir.ig.core",
  "license" : "CC0-1.0",
  "fhirVersion" : ["4.0.1"],
  "dependsOn" : [
    {
      "id" : "hl7tx",
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/implementationguide-dependency-comment",
          "valueMarkdown" : "Automatically added as a dependency - all IGs depend on HL7 Terminology"
        }
      ],
      "uri" : "http://terminology.hl7.org/ImplementationGuide/hl7.terminology",
      "packageId" : "hl7.terminology.r4",
      "version" : "6.5.0"
    },
    {
      "id" : "hl7ext",
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/implementationguide-dependency-comment",
          "valueMarkdown" : "Automatically added as a dependency - all IGs depend on the HL7 Extension Pack"
        }
      ],
      "uri" : "http://hl7.org/fhir/extensions/ImplementationGuide/hl7.fhir.uv.extensions",
      "packageId" : "hl7.fhir.uv.extensions.r4",
      "version" : "5.2.0"
    },
    {
      "id" : "hl7_fhir_dk_core",
      "uri" : "http://hl7.dk/fhir/core/ImplementationGuide/hl7.fhir.dk.core",
      "packageId" : "hl7.fhir.dk.core",
      "version" : "1.1.0"
    },
    {
      "id" : "hl7_fhir_uv_sdc",
      "uri" : "http://hl7.org/fhir/uv/sdc/ImplementationGuide/sdc",
      "packageId" : "hl7.fhir.uv.sdc",
      "version" : "2.7.0"
    }
  ],
  "definition" : {
    "extension" : [
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "copyrightyear"
          },
          {
            "url" : "value",
            "valueString" : "2021+"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "releaselabel"
          },
          {
            "url" : "value",
            "valueString" : "release"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-expansion-params"
          },
          {
            "url" : "value",
            "valueString" : "Parameters-expParam.json"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "usage-stats-opt-out"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "show-inherited-invariants"
          },
          {
            "url" : "value",
            "valueString" : "false"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "autoload-resources"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "template/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "input/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-qa"
          },
          {
            "url" : "value",
            "valueString" : "temp/qa"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-temp"
          },
          {
            "url" : "value",
            "valueString" : "temp/pages"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-output"
          },
          {
            "url" : "value",
            "valueString" : "output"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-suppressed-warnings"
          },
          {
            "url" : "value",
            "valueString" : "input/ignoreWarnings.txt"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-history"
          },
          {
            "url" : "value",
            "valueString" : "http://ehealth.sundhed.dk/fhir/history.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "template-html"
          },
          {
            "url" : "value",
            "valueString" : "template-page.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "template-md"
          },
          {
            "url" : "value",
            "valueString" : "template-page-md.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-contact"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-context"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-copyright"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-jurisdiction"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-license"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-publisher"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-version"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-wg"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "active-tables"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "fmm-definition"
          },
          {
            "url" : "value",
            "valueString" : "http://hl7.org/fhir/versions.html#maturity"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "propagate-status"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "excludelogbinaryformat"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "tabbed-snapshots"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-internal-dependency",
        "valueCode" : "hl7.fhir.uv.tools.r4#0.8.0"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "copyrightyear"
          },
          {
            "url" : "value",
            "valueString" : "2021+"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "releaselabel"
          },
          {
            "url" : "value",
            "valueString" : "release"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-expansion-params"
          },
          {
            "url" : "value",
            "valueString" : "Parameters-expParam.json"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "usage-stats-opt-out"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "show-inherited-invariants"
          },
          {
            "url" : "value",
            "valueString" : "false"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "autoload-resources"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "template/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "input/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-qa"
          },
          {
            "url" : "value",
            "valueString" : "temp/qa"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-temp"
          },
          {
            "url" : "value",
            "valueString" : "temp/pages"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-output"
          },
          {
            "url" : "value",
            "valueString" : "output"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-suppressed-warnings"
          },
          {
            "url" : "value",
            "valueString" : "input/ignoreWarnings.txt"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-history"
          },
          {
            "url" : "value",
            "valueString" : "http://ehealth.sundhed.dk/fhir/history.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "template-html"
          },
          {
            "url" : "value",
            "valueString" : "template-page.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "template-md"
          },
          {
            "url" : "value",
            "valueString" : "template-page-md.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-contact"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-context"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-copyright"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-jurisdiction"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-license"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-publisher"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-version"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-wg"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "active-tables"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "fmm-definition"
          },
          {
            "url" : "value",
            "valueString" : "http://hl7.org/fhir/versions.html#maturity"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "propagate-status"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "excludelogbinaryformat"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "tabbed-snapshots"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      }
    ],
    "resource" : [
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/291"
        },
        "name" : "291",
        "exampleCanonical" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-skrs-patient"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-action"
        },
        "name" : "Action",
        "description" : "Action Code",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-action"
        },
        "name" : "Action",
        "description" : "action status.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-action-guidance-for-types"
        },
        "name" : "Action guidance For Types",
        "description" : "Action guidance for types",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-action-guidance-types"
        },
        "name" : "Action guidance types",
        "description" : "Action guidance types",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-action-guidance-types"
        },
        "name" : "Action guidance types",
        "description" : "Action guidance types",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/action-participant-function"
        },
        "name" : "Action Participant Function",
        "description" : "The function performed by the participant for the action.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth.sundhed.dk-action-selection-behavior-supplement"
        },
        "name" : "Action Selection Behavior Supplement",
        "description" : "Defines selection behavior of a group.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-actionTrigger"
        },
        "name" : "Action Trigger",
        "description" : "Defines a reaction along with its trigger conditions.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-action-type"
        },
        "name" : "Action Type",
        "description" : "Action type",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-activitydefinition-code"
        },
        "name" : "Activity Definition Code",
        "description" : "Activity Definition Code.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-activitydefinition-code"
        },
        "name" : "Activity Definition Codes",
        "description" : "Kinds of activities",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/activitydefinition-code-to-observation-code"
        },
        "name" : "ActivityDefinition code to Observation code",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/activitydefinition-code-to-do-missing-measurement"
        },
        "name" : "Activitydefinition-code to do missing measurement",
        "description" : "The map controls whether an activity shall be subjected to missing measurements checks or not.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/activitydefinition-code-to-do-reminder"
        },
        "name" : "Activitydefinition-code to do reminder",
        "description" : "The map controls whether an activity shall be subjected to producing reminders or not.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/activitydefinition-code-to-measurement-resource-type"
        },
        "name" : "Activitydefinition-code to measurement resource type",
        "description" : "The map controls what type of measurement resource is expected for a given activity code.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/activitydefinition-code-to-perform-sharing"
        },
        "name" : "Activitydefinition-code-to-perform-sharing",
        "description" : "The map controls whether an activity shall have sharingApprovalPolicy or not",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/hl7.org-fhir-address-type"
        },
        "name" : "Address Type",
        "description" : "The type of an address (physical / postal)",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/hl7.org-fhir-address-use"
        },
        "name" : "Address Use",
        "description" : "The use of an address",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-administrative-status"
        },
        "name" : "Administrative status",
        "description" : "The administrative status of how a message recipient has handled a message",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-administrative-status"
        },
        "name" : "Administrative Status",
        "description" : "Administrative status",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/administrative-status"
        },
        "name" : "Administrative Status",
        "description" : "Administrative status",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "SearchParameter"
          }
        ],
        "reference" : {
          "reference" : "SearchParameter/ehealth-communication-search-administrativeStatus"
        },
        "name" : "administrativeStatus",
        "description" : "Search parameter for finding communication based on administrative status",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-answer-Condition"
        },
        "name" : "Answer condition",
        "description" : "Defines the Answer condition for an answer option in the questionnaire.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-questionnaire-answerSignificance"
        },
        "name" : "Answer significance",
        "description" : "Defines the Answer significance for an answer option in the questionnaire.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-appointment-reason"
        },
        "name" : "Appointment Reason",
        "description" : "Appointment Reason",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-appointment-reason"
        },
        "name" : "Appointment Reason",
        "description" : "Appointment reason",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-appointment-servicetype"
        },
        "name" : "Appointment Service Type",
        "description" : "Appointment service type",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-appointment-servicetype"
        },
        "name" : "Appointment Service Types",
        "description" : "Appointment service type",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-appointmenttype-codes"
        },
        "name" : "Appointment Type Codes",
        "description" : "Appointment type code",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/appointmenttype-codes"
        },
        "name" : "Appointment Type Codes",
        "description" : "Appointment type codes used by the system",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Appointment"
          }
        ],
        "reference" : {
          "reference" : "Appointment/appointment01"
        },
        "name" : "appointment01",
        "exampleCanonical" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-appointment"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "SearchParameter"
          }
        ],
        "reference" : {
          "reference" : "SearchParameter/ehealth-appointment-search-groupId"
        },
        "name" : "appointmentGroupId",
        "description" : "Search parameter for finding resources based on group id",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-artifact-date"
        },
        "name" : "Artifact Date",
        "description" : "The date (and optionally time) when the artifact was last significantly changed.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-clinicalimpression-assessor-organization"
        },
        "name" : "assessor-Organization",
        "description" : "The organization that the assessor is a part of.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-clinicalimpression-assessor-other"
        },
        "name" : "assessor-other",
        "description" : "The patient or the related person performing the assessment.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-assigning-careteam"
        },
        "name" : "Assigning careteam",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-audit-restriction-levels"
        },
        "name" : "Audit Restriction Levels",
        "description" : "Audit Event Restriction Levels used to indicate whether the audit log should be hidden from the citizen and/or the legal guardian when interacting with the infrastructure.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-audit-restriction-levels"
        },
        "name" : "Audit Restriction Levels",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-composition-authorOrganization"
        },
        "name" : "Author organization",
        "description" : "Organization that authored the Composition",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-base"
        },
        "name" : "Base",
        "description" : "Version Base",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-base-environment"
        },
        "name" : "Base environment",
        "description" : "Base environment",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-basic-resource-type"
        },
        "name" : "Basic resource type",
        "description" : "Basic resource type",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-basic-resource-type"
        },
        "name" : "Basic resource type",
        "description" : "Basic resource type",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-body-site"
        },
        "name" : "Body site",
        "description" : "Body site",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-devicemetric-calibrationExpires"
        },
        "name" : "Calibration expires",
        "description" : "Date when the current calibration expires and recalibration is required.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/care-plan-status"
        },
        "name" : "Care Plan Status",
        "description" : "Indicates whether the plan is currently being acted upon, represents future intentions, or is now a historical record.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/hl7.org-fhir-care-team-status"
        },
        "name" : "Care Team Status",
        "description" : "Indicates the status of the care team.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-episodeofcare-caremanagerOrganization"
        },
        "name" : "Caremanager organization",
        "description" : "Reference to caremanagers organization",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-clinicalimpression-careplan"
        },
        "name" : "Careplan",
        "description" : "Identifies the CarePlan context in which this particular resource was created.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CapabilityStatement"
          }
        ],
        "reference" : {
          "reference" : "CapabilityStatement/careplan"
        },
        "name" : "careplan",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-careplan-category"
        },
        "name" : "CarePlan Category",
        "description" : "Care Plan Category",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-careplan-category"
        },
        "name" : "Careplan Category",
        "description" : "Careplan Category.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-careplan-statusHistory"
        },
        "name" : "Careplan status history",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-careplan-statusschedule"
        },
        "name" : "Careplan status schedule",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-ext-careteam"
        },
        "name" : "Careteam",
        "description" : "Careteam",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-careteam-category"
        },
        "name" : "CareTeam Category",
        "description" : "Care Team Category",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-careteam-category"
        },
        "name" : "CareTeam Category",
        "description" : "http://hl7.org/fhir/ValueSet/careteam-category + ssl | SSL | Service Support and Logistics Employee.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-careteam-participant-role"
        },
        "name" : "CareTeam Participant Role",
        "description" : "Care Team Participant Role",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-careteam-participant-role"
        },
        "name" : "CareTeam Participant Role",
        "description" : "Care Team Participant Role.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CareTeam"
          }
        ],
        "reference" : {
          "reference" : "CareTeam/108752"
        },
        "name" : "CareTeam/108752",
        "exampleCanonical" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CareTeam"
          }
        ],
        "reference" : {
          "reference" : "CareTeam/42"
        },
        "name" : "CareTeam/42",
        "exampleCanonical" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "SearchParameter"
          }
        ],
        "reference" : {
          "reference" : "SearchParameter/ehealth-appointment-search-careteam-participant"
        },
        "name" : "careteamParticipant",
        "description" : "Search parameter for finding appointments based on careteam participants",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "SearchParameter"
          }
        ],
        "reference" : {
          "reference" : "SearchParameter/ehealth-communication-search-careTeamRecipient"
        },
        "name" : "careTeamRecipient",
        "description" : "Search parameter for finding communication based on CareTeam recipient",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "SearchParameter"
          }
        ],
        "reference" : {
          "reference" : "SearchParameter/ehealth-communication-search-careTeamSender"
        },
        "name" : "careTeamSender",
        "description" : "Search parameter for finding communication based on CareTeam sender",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-clinicalimpression-codes"
        },
        "name" : "Clinical Impression Codes",
        "description" : "Value set of clinical impression codes.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-clinicalimpression-codes"
        },
        "name" : "ClinicalImpression Codes",
        "description" : "Assessment types",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-clinicalimpression-decision-codes"
        },
        "name" : "ClinicalImpression Decision Codes",
        "description" : "Clinical Impression Decision Codes",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-clinicalimpression-decision-codes"
        },
        "name" : "ClinicalImpression Decision Codes",
        "description" : "Value set of clinical impression decision codes.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-clinicalimpression-decision-support-codes"
        },
        "name" : "ClinicalImpression Decision Support Codes",
        "description" : "Decision support codes",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-clinicalimpression-finding-codes"
        },
        "name" : "ClinicalImpression Finding Codes",
        "description" : "Clinical Impression Finding Codes",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-clinicalimpression-finding-codes"
        },
        "name" : "ClinicalImpression Finding Codes",
        "description" : "Value set of clinical impression finding codes.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-clinicalimpression-investigation-item-codes"
        },
        "name" : "ClinicalImpression Investigation Item Codes",
        "description" : "Clinical Impression Investigation Item Codes",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-clinicalimpression-investigation-item-codes"
        },
        "name" : "ClinicalImpression Investigation Item Codes",
        "description" : "Value set of clinical impression investigation item codes.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-clone-operation"
        },
        "name" : "Clone Operation",
        "description" : "Clone operation codes",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/urn-ietf-bcp-47"
        },
        "name" : "Common Codes from BCP-47",
        "description" : "Common Codes from BCP-47 (http://tools.ietf.org/html/bcp47)",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-communication-category"
        },
        "name" : "Communication Category",
        "description" : "Communication category",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-communication-category"
        },
        "name" : "Communication Category",
        "description" : "Communication Category.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "SearchParameter"
          }
        ],
        "reference" : {
          "reference" : "SearchParameter/ehealth-communication-search-communicationAbout"
        },
        "name" : "communicationAbout",
        "description" : "Search parameter for finding communication based on about",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "SearchParameter"
          }
        ],
        "reference" : {
          "reference" : "SearchParameter/ehealth-communication-search-communicationCategory"
        },
        "name" : "communicationCategory",
        "description" : "Search parameter for finding communication based on the category code",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "SearchParameter"
          }
        ],
        "reference" : {
          "reference" : "SearchParameter/ehealth-communication-search-groupId"
        },
        "name" : "communicationGroupId",
        "description" : "Search parameter for finding resources based on group id",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "SearchParameter"
          }
        ],
        "reference" : {
          "reference" : "SearchParameter/ehealth-communication-search-participant"
        },
        "name" : "communicationParticipant",
        "description" : "Search parameter for finding communication based on participant",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "SearchParameter"
          }
        ],
        "reference" : {
          "reference" : "SearchParameter/ehealth-communication-search-relates-to"
        },
        "name" : "communicationRelatesTo",
        "description" : "Search parameter for finding communication based on either participant or episode of care",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/conceptmap-obs-code-to-value-type"
        },
        "name" : "conceptmap-obs-code-to-value-type",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-enableBehavior-conditionId"
        },
        "name" : "Condition Id",
        "description" : "Id for condition on question.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/42"
        },
        "name" : "Condition/42",
        "exampleCanonical" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-condition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-conditions"
        },
        "name" : "Conditions",
        "description" : "Condition codes",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-conditions"
        },
        "name" : "Conditions",
        "description" : "Conditions.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-consent-category"
        },
        "name" : "Consent Category",
        "description" : "Consent codes",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-consent-category"
        },
        "name" : "Consent Category",
        "description" : "Value set of kinds of consents.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/hl7.org-fhir-consent-state-codes"
        },
        "name" : "Consent State Codes",
        "description" : "Indicates the state of the consent",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-contactpoint-custodian"
        },
        "name" : "ContactPoint Custodian",
        "description" : "Contact Point Custodian",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-contactpoint-custodian"
        },
        "name" : "ContactPoint Custodian",
        "description" : "Contact point custodians.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-contactpoint-system"
        },
        "name" : "ContactPoint System",
        "description" : "Contact Point System",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-contactpoint-system"
        },
        "name" : "ContactPoint System",
        "description" : "Contact point systems.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-content"
        },
        "name" : "Content",
        "description" : "The content",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-deviceusestatement-context"
        },
        "name" : "Context",
        "description" : "The careplan context for the device use",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-questionnaire-item-is-copyright"
        },
        "name" : "Copyright item indicator",
        "description" : "Indicates that the item is part of a copyright structure (CDA Document sharing - QFDD/QRD)",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-apply"
        },
        "name" : "Create a careplan",
        "description" : "Create a careplan with service requests for a specific episodeOfCare using the PlanDefinition as a template. If using POST the operation will persist resources and return the careplan. If using GET the operation will return transient resources in a transaction bundle. The bundle with transient careplan and servicerequest resources can then be modified before being persisted using a FHIR transaction.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/PlanDefinition-i-apply"
        },
        "name" : "Create a careplan",
        "description" : "Create a careplan with service requests for a specific episodeOfCare using the PlanDefinition as a template. If using POST the operation will persist resources and return the careplan. If using GET the operation will return transient resources in a transaction bundle. The bundle with transient careplan and servicerequest resources can then be modified before being persisted using a FHIR transaction.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/Questionnaire-i-create-clone"
        },
        "name" : "Create a clone of a Questionnaire",
        "description" : "### Input\n- resourceId: reference to the Questionnaire resource that should be cloned\n- clone-operation: minor-version/major-version/copy Coding from codesystem: http://ehealth.sundhed.dk/cs/ehealth-clone-operation \n\n### Output\nBundle containing all resources that were created during the operation.\n\n### Validation\n- New business versions require that the user has modifier-role: owner or co-author for the resource\n- New copy does not require that the user has a modifier-role.\n- New business version can be made only when no draft resource exists (having identical base identifier).\n- Read/search/create privileges are required for the resource types affected by $create-clone",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/ActivityDefinitionPlanDefinition-i-create-clone"
        },
        "name" : "Create a clone of an ActivityDefinition",
        "description" : "### Input\n- resourceId: reference to the ActivityDefinition resource that should be cloned\n- clone_operation: minor-version/major-version/copy Coding from codesystem: http://ehealth.sundhed.dk/cs/ehealth-clone-operation \n- default-clone-behavior: true/false. False signifies deep-clone mode where the list of deep-clone-references determine which resources should be cloned \n- deep-clone-references: References to resources to create as new resources rather than referencing the existing ones.\n\n### Output\nBundle containing all resources that were created during the operation.\n\n### Validation\n- New business versions require that the user has modifier-role: owner or co-author for the resource\n- New copy does not require that the user has a modifier-role.\n- New business version can be made only when no draft resource exists (having identical base identifier).\n- Read/search/create privileges are required for the resource types affected by $create-clone",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-create-episode-of-care"
        },
        "name" : "Create an EpisodeOfCare",
        "description" : "This operation persists an EpisodeOfCare based on the transient value of an EpisodeOfCare provided in the input.\r\n## Input\r\nThe input is a Bundle which must contain exactly one EpisodeOfCare, conditions referenced in diagnosis list and at least one Provenance resource. All Provenances in the input must have the EpisodeOfCare as target. At least one Provenance must be interpreted into a 'Privacy-provenance' (see below).\r\n### The EpisodeOfCare resource\r\nThe EpisodeOfCare has to have `PLANNED` status \r\nThe 'id' property of the EpisodeOfCare will be reassigned by the server, but can be referenced by other resources in the same bundle. \r\nThe 'managingOrganization' property of the EpisodeOfCare references the GDPR Data Controller (Danish: 'Dataansvarlig').\r\n### The privacy-Provenance resource\r\nA privacy-Provenance is a Provenance resource characterized by having at least one entry in Provenance.policy which data are transported, stored, or processed in the system. Possible values are:\r\n- 'http://ehealth.sundhed.dk/policy/dk/sundhedsloven'\r\n- 'http://ehealth.sundhed.dk/policy/dk/serviceloven'\r\n### Diagnosis referenced Condition resource\r\nFor any diagnosis listed, the referenced Condition must be concerning the same Patient as the EpisodeOfCare.\r\n## Output\r\nFor valid inputs, the server will create, persist and return a new EpisodeOfCare, client-supplied provenances, conditions and origin-provenance carrying a server-assigned ids.\r\nTo get resources bodies in the output the request header has to contain parameter ```Prefer: return=representation```.\r\n## Validation\r\n- Patient.deceased must be false to create episode of care\r\n### The origin-Provenance resource\r\nWhenever an EpisodeOfCare is created, the server automatically creates an 'origin' Provenance resource point to it (in addition to the client-supplied Privacy-Provenance). This Origin-Provenance resource is filled with data from the JWT access token in order to record the origin of the EpisodeOfCare resource. For instance agent.whoReference points to a resource which is created as a shadow identity from the JWT token.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/ehealth-patient-create"
        },
        "name" : "Create Patient",
        "description" : "Creates a Patient resource on the server and returns it in the response. If the patient already exists, it is returned instead. If the CPR number does not match a patient on the service, looks up the CPR in the national registry and finds any potential prior CPRs used by the person. If a prior CPR number matches a patient on the service, updates the patient with national data, and returns a patient with the newest data. NOTE: This means that the returned patient can have a different identifier than the one used for the request. If no prior CPR matches, creates a new patient using national data. If the CPR is invalid, i.e. does not correspond to a patient on the national registry, it errors. \r\n\r\n### Note\r\nThis operation is currently the only way to create Patient resources in the eHealth Infrastructure, as it ensures that the correct bindings from national registers",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-creator"
        },
        "name" : "Creator",
        "description" : "Creator Careteam",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-organization-cvrNumber"
        },
        "name" : "CVR Number",
        "description" : "The organization's identification code in the Danish 'Centrale Virksomhedsregister'",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "NamingSystem"
          }
        ],
        "reference" : {
          "reference" : "NamingSystem/cpr"
        },
        "name" : "Danish civil registration system - CPR",
        "description" : "The Danish civil registration system (\"CPR\") encompasses basic personal data about anyone with a civil registration number. A civil registration number shall be allocated to anyone who: 1) is registered in the national register in Denmark on the grounds of birth or relocation from abroad; 2) is included under Arbejdsmarkedets TillægsPension (ATP); 3) according to the tax authorities, is required to have a civil registration number for the purpose of tax processing in Denmark.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/snomed-20150731"
        },
        "name" : "Danish SNOMED CT Extension",
        "description" : "Danish SNOMED CT Extension",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/snomed-20180331"
        },
        "name" : "Danish SNOMED CT Extension",
        "description" : "Danish SNOMED CT Extension",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/snomed-20180930"
        },
        "name" : "Danish SNOMED CT Extension",
        "description" : "Danish SNOMED CT Extension",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-data-absent-reason"
        },
        "name" : "Data Absent Reason",
        "description" : "Used to specify why the normally expected content of the data element is missing.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/data-absent-reason"
        },
        "name" : "DataAbsentReason",
        "description" : "Used to specify why the normally expected content of the data element is missing.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-provenance-dateTimeOfReusedEntity"
        },
        "name" : "Date/time of re-used entity",
        "description" : "Contains date and time of Reused Entity",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/hl7.org-fhir-days-of-week"
        },
        "name" : "Days Of Week",
        "description" : "The days of the week.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-clinicalimpression-decision"
        },
        "name" : "Decision",
        "description" : "Clinical impression decision, 'approved' or 'approved-for-sharing'",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-clinicalimpression-decisionContext"
        },
        "name" : "Decision context",
        "description" : "Library and relevant resources used for evaluation",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/DocumentReference-t-deprecate-document"
        },
        "name" : "Deprecate document",
        "description" : "Deprecates a shared document. The operation takes a documentIdentifier and cpr-number as parameters and finds the DocumentReference with the corresponding masterIdentifier. masterIdentifier should be unique for DocumentReference so if less than 0 or more than 1 are found the operation throws and exception. If the found documentReference has a patient which cpr number matches the provided value the document is deprecated. iti-57 is used to deprecate the document on XDS. On successthe documentReference status is updated to superseded and updated in the database.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-description"
        },
        "name" : "Description",
        "description" : "Natural language description",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CapabilityStatement"
          }
        ],
        "reference" : {
          "reference" : "CapabilityStatement/device"
        },
        "name" : "device",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-device-calibration-actor"
        },
        "name" : "Device calibration actor",
        "description" : "Device calibration actor.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-device-calibration-actor"
        },
        "name" : "Device Calibration Actor",
        "description" : "Device calibration actor.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-device-calibration-period"
        },
        "name" : "Device calibration period",
        "description" : "Device calibration period.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-device-calibration-period"
        },
        "name" : "Device Calibration Period",
        "description" : "Device calibration period.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-device-calibration-type"
        },
        "name" : "Device Calibration Type",
        "description" : "Device calibration type",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-device-measurement-unit"
        },
        "name" : "Device Measurement Unit",
        "description" : "Device measurement unit",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-device-measuring-quality"
        },
        "name" : "Device Measuring Quality",
        "description" : "Quality codes for qualities with which a device can perform measuring",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-device-measuring-quality"
        },
        "name" : "Device Measuring Quality",
        "description" : "Device Measuring Quality value set.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-device-safety"
        },
        "name" : "Device safety",
        "description" : "Device safety",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-device-safety"
        },
        "name" : "Device Safety",
        "description" : "Device safety value set.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-device-service-types"
        },
        "name" : "Device service types",
        "description" : "Device service types.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-device-supplier-roles"
        },
        "name" : "Device Supplier Roles",
        "description" : "Types of device related services.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-device-supplier-roles"
        },
        "name" : "Device Supplier Roles",
        "description" : "Device Supplier Roles value set.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-device-types"
        },
        "name" : "Device Types",
        "description" : "Types of devices.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-device-types"
        },
        "name" : "Device Types",
        "description" : "Device Types value set.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-device-use-reason"
        },
        "name" : "Device Use Reason",
        "description" : "Device use reasons.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-device-use-reason"
        },
        "name" : "Device Use Reason",
        "description" : "Device Use Reason value set.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-devicemetric-property-types"
        },
        "name" : "DeviceMetric Property Types",
        "description" : "Types of properties which can be attributed to a Device.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-devicemetric-quality-types"
        },
        "name" : "DeviceMetric Quality Types",
        "description" : "Device metric quality type codes",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-devicemetric-quality-types"
        },
        "name" : "DeviceMetric Quality Types",
        "description" : "Device Metric Quality Types value set.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-devicemetric-property-types"
        },
        "name" : "DeviceMetricPropertyTypes",
        "description" : "Device Metric Property Types value set.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/urn-oid-1.2.208.184.100.9"
        },
        "name" : "DK IHE ClassCode CS",
        "description" : "Code system for the classCode attribute",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/dk-ihe-formatcode-cs"
        },
        "name" : "DK IHE Format Code CodeSystem",
        "description" : "Code system for document format code used in national Document sharing",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/dk-ihe-classcode-vs"
        },
        "name" : "DK_IHE_ClassCode_VS",
        "description" : "Value set for the classCode attribute.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/dk-ihe-eventcodelists-vs"
        },
        "name" : "DK_IHE_EventCodeLists_VS",
        "description" : "Event codes used in DK IHE Document sharing. The codes shall be NPU or procedure codes used in the Danish health care systems.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/dk-ihe-formatcode-vs"
        },
        "name" : "DK_IHE_FormatCode_VS",
        "description" : "Value set for document format code used in national Document sharing.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/dk-ihe-healthcarefacilitytypecode-vs"
        },
        "name" : "DK_IHE_HealthcareFacilityTypeCode_VS",
        "description" : "Allowed value set for healthcare facility type code represents the type of organizational setting of the clinical encounter during which the documented act occurred.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/dk-ihe-practicesettingcode-vs"
        },
        "name" : "DK_IHE_practiceSettingCode_VS",
        "description" : "Values used for the document metadata attribute practiceSettingCode, which is an attribute specifying the clinical specialty where the act that resulted in the document was performed (e.g., Family Practice, Laboratory, Radiology). The value set is based on a subset of the code list from the SOR lookup table 'SOR-Enhedstyper' (http://sor.sundhedsstyrelsen.dsdn.dk/lookupdata/#EntityTypes, accessable on Sundhedsdatanettet (SDN)), which is based on SNOMED codes.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/dk-ihe-typecode-vs"
        },
        "name" : "DK_IHE_TypeCode_VS",
        "description" : "Value set for the typeCode attribute. The typeCode specifies the precise type of document from the user perspective. The granularity of typeCode is finer grained than its superior classCode.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-document-category"
        },
        "name" : "Document Category",
        "description" : "Document Category value set.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-document-class"
        },
        "name" : "Document Class",
        "description" : "Document Class",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-document-class"
        },
        "name" : "Document Class",
        "description" : "Document Class value set.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/document-sharing-state"
        },
        "name" : "Document Sharing State",
        "description" : "Document Sharing State",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/document-sharing-state"
        },
        "name" : "Document Sharing State",
        "description" : "Document Sharing State",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-document-type"
        },
        "name" : "Document Type",
        "description" : "Document Type",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-document-type"
        },
        "name" : "Document Type",
        "description" : "Document Type value set.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CapabilityStatement"
          }
        ],
        "reference" : {
          "reference" : "CapabilityStatement/document-query"
        },
        "name" : "document-query",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CapabilityStatement"
          }
        ],
        "reference" : {
          "reference" : "CapabilityStatement/document-transformation"
        },
        "name" : "document-transformation",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-effectivePeriod"
        },
        "name" : "effectivePeriod",
        "description" : "Clinically relevant time-period for questionnaire response.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-actionguidance-for"
        },
        "name" : "Ehealth action guidance for",
        "description" : "Action guidance for",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-actionguidance-type"
        },
        "name" : "Ehealth action guidance type",
        "description" : "The action guidance type",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-designation-use"
        },
        "name" : "eHealth Designation Use",
        "description" : "Codes used to identify/describe designation use.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-designation-use"
        },
        "name" : "eHealth Designation Use",
        "description" : "Details of how a designation would be used.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "NamingSystem"
          }
        ],
        "reference" : {
          "reference" : "NamingSystem/ehealth-device-identifier"
        },
        "name" : "eHealth Device Identifier",
        "description" : "An identifier of a device used in eHealth",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-manuallydeprecated-type"
        },
        "name" : "Ehealth Document manually deprecated",
        "description" : "Ehealth Document manually deprecated",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "NamingSystem"
          }
        ],
        "reference" : {
          "reference" : "NamingSystem/ehealth-environment"
        },
        "name" : "eHealth Environment",
        "description" : "The eHealth Environment is assigned to PlanDefinition, ActivityDefinition and Questionnaire resources in the eHealth Infrastructure created on the environment",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-message-reasonCode"
        },
        "name" : "eHealth Message Reason Code",
        "description" : "eHealth Message Reason Code",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-program"
        },
        "name" : "eHealth Program",
        "description" : "Codes for programs or projects using the eHealth Infrastructure and wanting to mark various resources as intended for their non-exclusive use.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-program"
        },
        "name" : "eHealth Program",
        "description" : "Programs or projects using the eHealth Infrastructure and wanting to mark various resources as intended for their non-exclusive use.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-property"
        },
        "name" : "eHealth Property",
        "description" : "Codes used to identity specific properties on codes in eHealth CodeSystems.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-property"
        },
        "name" : "eHealth Property",
        "description" : "Used to distinguish/extract specific properties of a code.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-system"
        },
        "name" : "Ehealth System",
        "description" : "Tag værdi for anvendersystem",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-unit-code"
        },
        "name" : "eHealth Unit Codes",
        "description" : "Unit Codes",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-usage-context-type"
        },
        "name" : "eHealth Usage Context Type",
        "description" : "The following table supersedes the expansion table below for the following codes:\n\n| Code                | System                                                                                     | Display           | Definition                                                                                                                                                                                   |\n|---------------------|--------------------------------------------------------------------------------------------|-------------------|----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|\n| focus               | http://terminology.hl7.org/CodeSystem/usage-context-type                                    | Clinical Focus    | The clinical concept(s) addressed by the artifact/element. For example, disease, diagnostic test interpretation, medication ordering as in http://ehealth.sundhed.dk/vs/conditions                                                |\n| program             | http://terminology.hl7.org/CodeSystem/usage-context-type                                    | Program           | A program/project of work for which this artifact/element is applicable. http://ehealth.sundhed.dk/vs/ehealth-program                                                                                                         |\n| activity            | http://ehealth.sundhed.dk/cs/ehealth-usage-context-type                                    | Activity Type     | The type of activity in which it is relevant to use a module/element having this use context (see http://hl7.org/fhir/metadatatypes.html#UsageContext). For this context type, the value should be a code taken from the http://ehealth.sundhed.dk/vs/activitydefinition-code value set. |\n| supports            | http://ehealth.sundhed.dk/cs/ehealth-usage-context-type                                    | Supports          | The type of activity supported by a module/element having this use context (see http://hl7.org/fhir/metadatatypes.html#UsageContext). For this context type, the value should be a code taken from the http://ehealth.sundhed.dk/vs/activitydefinition-code value set. |\n| range               | http://ehealth.sundhed.dk/cs/ehealth-usage-context-type                                    | Range             | The type of reference range with which it is relevant to use a module/element having this use context (see http://hl7.org/fhir/metadatatypes.html#UsageContext). For this context type, the value should be a code taken from the http://ehealth.sundhed.dk/vs/reference-range-type value set. |\n| questionnaire-related | http://ehealth.sundhed.dk/cs/ehealth-usage-context-type                                    | Questionnaire Related | The type of questionnaire element with which it is relevant to use a coded values/id registries having this use context (see http://hl7.org/fhir/metadatatypes.html#UsageContext). For this context type, the value should be a code taken from the http://ehealth.sundhed.dk/vs/questionnaire-elements value set. |",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-usage-context-type"
        },
        "name" : "eHealth Usage Contxt Type",
        "description" : "Usage Context type",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-actionguidance"
        },
        "name" : "ehealth-actionguidance",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-activitydefinition"
        },
        "name" : "ehealth-activitydefinition",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-appointment"
        },
        "name" : "ehealth-appointment",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-auditevent"
        },
        "name" : "ehealth-auditevent",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-careplan"
        },
        "name" : "ehealth-careplan",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-careteam"
        },
        "name" : "ehealth-careteam",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-clinicalimpression"
        },
        "name" : "ehealth-clinicalimpression",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-communication"
        },
        "name" : "ehealth-communication",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-communication-request"
        },
        "name" : "ehealth-communication-request",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-composition"
        },
        "name" : "ehealth-composition",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-condition"
        },
        "name" : "ehealth-condition",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-consent"
        },
        "name" : "ehealth-consent",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-definedquestion"
        },
        "name" : "ehealth-definedquestion",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-device"
        },
        "name" : "ehealth-device",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-devicemetric"
        },
        "name" : "ehealth-devicemetric",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-deviceusestatement"
        },
        "name" : "ehealth-deviceusestatement",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-documentreference"
        },
        "name" : "ehealth-documentreference",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-episodeofcare"
        },
        "name" : "ehealth-episodeofcare",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-goal"
        },
        "name" : "ehealth-goal",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-group-appointment"
        },
        "name" : "ehealth-group-appointment",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-group-videoappointment"
        },
        "name" : "ehealth-group-videoappointment",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-guidanceresponse"
        },
        "name" : "ehealth-guidanceresponse",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-library"
        },
        "name" : "ehealth-library",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-material-communication"
        },
        "name" : "ehealth-material-communication",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-media"
        },
        "name" : "ehealth-media",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-message"
        },
        "name" : "ehealth-message",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-observation"
        },
        "name" : "ehealth-observation",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-observation-wound-dimensions"
        },
        "name" : "ehealth-observation-wound-dimensions",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-organization"
        },
        "name" : "ehealth-organization",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-patient"
        },
        "name" : "ehealth-patient",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-plandefinition"
        },
        "name" : "ehealth-plandefinition",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-practitioner"
        },
        "name" : "ehealth-practitioner",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-practitionerrole"
        },
        "name" : "ehealth-practitionerrole",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-provenance"
        },
        "name" : "ehealth-provenance",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-questionnaire"
        },
        "name" : "ehealth-questionnaire",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-questionnaire-advanced"
        },
        "name" : "ehealth-questionnaire-advanced",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-questionnaireresponse"
        },
        "name" : "ehealth-questionnaireresponse",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-relatedperson"
        },
        "name" : "ehealth-relatedperson",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-servicerequest"
        },
        "name" : "ehealth-servicerequest",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-skrs-patient"
        },
        "name" : "ehealth-skrs-patient",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-task"
        },
        "name" : "ehealth-task",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-transformation-documentreference"
        },
        "name" : "ehealth-transformation-documentreference",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-videoappointment"
        },
        "name" : "ehealth-videoappointment",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-view"
        },
        "name" : "ehealth-view",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-document-reference-type"
        },
        "name" : "EHealthDocumentReference Type",
        "description" : "EHealthDocumentReference Type CodeSystem",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-document-reference-type"
        },
        "name" : "EHealthDocumentReference Type",
        "description" : "EHealthDocumentReference Type ValueSet",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "NamingSystem"
          }
        ],
        "reference" : {
          "reference" : "NamingSystem/ehealth-identifier"
        },
        "name" : "eHealthIdentifier",
        "description" : "The eHealth Identifier is assigned to certain domain resources in the eHealth Infrastructure and used when transforming to CDA document representation.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "NamingSystem"
          }
        ],
        "reference" : {
          "reference" : "NamingSystem/ehealth-question-identifier"
        },
        "name" : "eHealthQuestionIdentifier",
        "description" : "The eHealth Question Identifier is assigned to questions (not to be confused with question codes) in a questionnaire created in the eHealth Infrastructure.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-unit"
        },
        "name" : "eHealthUnit",
        "description" : "Value set of Unit Codes and Ucum common",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-unit-code"
        },
        "name" : "eHealthUnitCodes",
        "description" : "Value set of Unit Codes",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-employee-title"
        },
        "name" : "Employee title",
        "description" : "Title for employed clinicians",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-end-meeting-on-end-time"
        },
        "name" : "End meeting on end time",
        "description" : "Indicates if a video meeting must end on end time",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/hl7.org-fhir-episode-of-care-status"
        },
        "name" : "Episode Of Care Status",
        "description" : "The status of the episode of care.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-guidanceresponse-episodeOfCare"
        },
        "name" : "EpisodeOfCare",
        "description" : "Episode of care",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-task-episodeOfCare"
        },
        "name" : "EpisodeOfCare",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "SearchParameter"
          }
        ],
        "reference" : {
          "reference" : "SearchParameter/ehealth-communication-search-episodeOfCare"
        },
        "name" : "episodeOfCare",
        "description" : "Search parameter for finding communication based on episodeOfCare",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "EpisodeOfCare"
          }
        ],
        "reference" : {
          "reference" : "EpisodeOfCare/42"
        },
        "name" : "EpisodeOfCare/42",
        "exampleCanonical" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/Library-it-evaluate"
        },
        "name" : "Evaluate",
        "description" : "This operation evaluates parameters passed as input against the decision support rule identified by the Library resource. It returns the computed clinical decision support result and/or errors. The Library resource identifies the clinical decision rule and define its parameters.\n\nThe operation is idempotent.\n### Input\n- 1..1 Parameters: HL7 FHIR [Parameters](https://www.hl7.org/fhir/stu3/parameters.html) resource containing input parameters for the clinical decision support computation.This should either be a QuestionnaireResponse or an Observation for evaluation.\n\n### Output\nUpon success this operation returns an GuidanceResponse resource containing the decision support result.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/EventTiming"
        },
        "name" : "Event Timing",
        "description" : "EventTiming",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-event-type-codes"
        },
        "name" : "Event Type Codes",
        "description" : "Event type codes value set.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-execute-careplan-and-episode-of-care-stats"
        },
        "name" : "Execute careplan and episode of care stats",
        "description" : "### Report Contents\nThis report contains a count of active EpisodeOfCare and CarePlans.\n### Grouping \nThis report is grouped by ConditionCode. Each group is returned in a separate JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- period: Filter on CarePlan.period overlap\n\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nThe ConditionCode is a Fhir CodeableConcept. See the implementation guide for details\n\n    {\n        'ConditionCode': {\n            'valueCodeableConcept': {\n                'coding': [{\n                        'system': 'urn:oid:1.2.208.176.2.4',\n                        'code': 'DJ44'\n                    }\n                ]\n            }\n        },\n        'ConditionSummary': {\n            'activeEpisodeOfCareCount': 1,\n            'activeCarePlanCount': 1\n        }\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-execute-careplan-customization-stats"
        },
        "name" : "Execute careplan customization stats",
        "description" : "### Report Contents\nThis report contains a count of patient specific modifications of:\n- Measurement schedule timing\n- Reference ranges\n### Grouping \nThis report is grouped by PlanDefinition. Each group is returned in a separate JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- period: Filter on CarePlan.period overlap\n\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nEHealthPlanDefinition is a Fhir resource. See the implementation guide for details\n\n    {\n        'EHealthPlanDefinition': {\n            'resourceType': 'PlanDefinition',\n            'id': '53450',\n            'meta': {\n                'versionId': '1',\n                'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition']\n            },\n            'extension': [{\n                    'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role',\n                    'extension': [{\n                            'url': 'reference',\n                            'valueReference': {\n                                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/85109'\n                            }\n                        }, {\n                            'url': 'role',\n                            'valueCodeableConcept': {\n                                'coding': [{\n                                        'system': 'http://ehealth.sundhed.dk/cs/modifier-role',\n                                        'code': 'owner'\n                                    }\n                                ]\n                            }\n                        }\n                    ]\n                }\n            ],\n            'version': '97219ba1-2202-42a1-b99d-45de3a506b40',\n            'status': 'active'\n        },\n        'CarePlanCustomizationSummary': {\n            'timingCustomizationCount': 1,\n            'referenceRangeCustomizationCount': 1\n        }\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-execute-careplan-duration-stats"
        },
        "name" : "Execute careplan duration stats",
        "description" : "### Report Contents\nThis report contains statistics on status changes for CarePlans:\n- count: Number of CarePlans in each state\n- min: Shortest time spent in each state\n- max: Longest time spent in each state\n- sum: Sum of time spent in each state\n- average: Average time spent in each state.\n \nThe durations are specified in [ISO 8601](https://www.digi.com/resources/documentation/digidocs/90001437-13/reference/r_iso_8601_duration_format.htm) format.\n### Grouping \nThis report is grouped by PlanDefinition. Each group is returned in a separate JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- period: Filter on CarePlan.period overlap\n- condition: Filter on EpisodeOfCare condition match\n\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nEHealthPlanDefinition is a Fhir resource. See the implementation guide for details\n\n    {\n        'EHealthPlanDefinition': {\n            'resourceType': 'PlanDefinition',\n            'id': '257',\n            'meta': {\n                'versionId': '1',\n                'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition']\n            },\n            'extension': [{\n                    'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role',\n                    'extension': [{\n                            'url': 'reference',\n                            'valueReference': {\n                                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/73753'\n                            }\n                        }, {\n                            'url': 'role',\n                            'valueCodeableConcept': {\n                                'coding': [{\n                                        'system': 'http://ehealth.sundhed.dk/cs/modifier-role',\n                                        'code': 'owner'\n                                    }\n                                ]\n                            }\n                        }\n                    ]\n                }\n            ],\n            'version': 'dc9ecd87-163f-4d2f-bdfe-434085eafe4f',\n            'status': 'active'\n        },\n        'CarePlanStatusDurationSummary': {\n            'statusDurationStatistics': {\n                'draft': {\n                    'status': {\n                        'valueCodeableConcept': {\n                            'coding': [{\n                                    'system': 'http://hl7.org/fhir/care-plan-status',\n                                    'code': 'draft'\n                                }\n                            ]\n                        }\n                    },\n                    'durationStatistics': {\n                        'count': 2,\n                        'min': 'P10DT10H0M0S',\n                        'max': 'P15DT0H0M0S',\n                        'sum': 'P25DT10H0M0S',\n                        'average': 'P12DT17H0M0S'\n                    }\n                },\n                'active': {\n                    'status': {\n                        'valueCodeableConcept': {\n                            'coding': [{\n                                    'system': 'http://hl7.org/fhir/care-plan-status',\n                                    'code': 'active'\n                                }\n                            ]\n                        }\n                    },\n                    'durationStatistics': {\n                        'count': 2,\n                        'min': 'P200DT0H0M0S',\n                        'max': 'P200DT0H0M0S',\n                        'sum': 'P400DT0H0M0S',\n                        'average': 'P200DT0H0M0S'\n                    }\n                },\n                'completed': {\n                    'status': {\n                        'valueCodeableConcept': {\n                            'coding': [{\n                                    'system': 'http://hl7.org/fhir/care-plan-status',\n                                    'code': 'completed'\n                                }\n                            ]\n                        }\n                    },\n                    'durationStatistics': {\n                        'count': 2,\n                        'min': 'P284DT14H0M0S',\n                        'max': 'P380DT0H0M0S',\n                        'sum': 'P664DT14H0M0S',\n                        'average': 'P332DT7H0M0S'\n                    }\n                },\n                'suspended': {\n                    'status': {\n                        'valueCodeableConcept': {\n                            'coding': [{\n                                    'system': 'http://hl7.org/fhir/care-plan-status',\n                                    'code': 'suspended'\n                                }\n                            ]\n                        }\n                    },\n                    'durationStatistics': {\n                        'count': 2,\n                        'min': 'P5DT0H0M0S',\n                        'max': 'P5DT0H0M0S',\n                        'sum': 'P10DT0H0M0S',\n                        'average': 'P5DT0H0M0S'\n                    }\n                }\n            }\n        }\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-execute-careplans-by-patient"
        },
        "name" : "Execute careplans by patient",
        "description" : "### Report Contents\nThis report contains the following resources:\n- EpisodeOfCare\n- PlanDefinition\n- CarePlan\n- ServiceRequest\n### Grouping \nThis report is grouped by EpisodeOfCare. Each group is returned in a separate JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- period: Filter on CarePlan.period overlap\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nAll returned objects are Fhir resources. See the implementation guide for details\n\n    {\n        'EHealthEpisodeOfCare': {\n            'resourceType': 'EpisodeOfCare',\n            'id': '30254',\n            'meta': {\n                'versionId': '1',\n                'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare']\n            },\n            'extension': [{\n                    'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization',\n                    'valueReference': {\n                        'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/88873'\n                    }\n                }\n            ],\n            'status': 'active',\n            'diagnosis': [{\n                    'condition': {\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/66740'\n                    },\n                    'rank': 1\n                }\n            ],\n            'patient': {\n                'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/18637'\n            },\n            'managingOrganization': {\n                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/16046'\n            },\n            'period': {\n                'start': '1970-01-01T01:00:01+01:00',\n                'end': '1970-01-01T01:01:40+01:00'\n            }\n        },\n        'EHealthCarePlan': [{\n                'resourceType': 'CarePlan',\n                'id': '1597',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan']\n                },\n                'definition': [{\n                        'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/59578'\n                    }\n                ],\n                'status': 'draft',\n                'intent': 'option',\n                'category': [{\n                        'coding': [{\n                                'system': 'http://ehealth.sundhed.dk/cs/careplan-category',\n                                'code': 'TBD'\n                            }\n                        ]\n                    }\n                ],\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/57779'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/30254'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                },\n                'addresses': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/74721'\n                    }\n                ],\n                'activity': [{\n                        'reference': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/76916'\n                        }\n                    }\n                ]\n            }\n        ],\n        'EHealthPlanDefinition': [{\n                'resourceType': 'PlanDefinition',\n                'id': '59578',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role',\n                        'extension': [{\n                                'url': 'reference',\n                                'valueReference': {\n                                    'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/41757'\n                                }\n                            }, {\n                                'url': 'role',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/modifier-role',\n                                            'code': 'owner'\n                                        }\n                                    ]\n                                }\n                            }\n                        ]\n                    }\n                ],\n                'version': 'c701b8e8-abe6-41bd-9db5-c05b94bc1e2b',\n                'status': 'active'\n            }\n        ],\n        'EHealthServiceRequest': [{\n                'resourceType': 'ServiceRequest',\n                'id': '76916',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy',\n                        'valueCodeableConcept': {\n                            'coding': [{\n                                    'system': 'http://ehealth.sundhed.dk/cs/measurement-sharing-policies',\n                                    'code': 'TBD'\n                                }\n                            ]\n                        }\n                    }\n                ],\n                'definition': [{\n                        'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/13593'\n                    }\n                ],\n                'status': 'completed',\n                'intent': 'filler-order',\n                'code': {\n                    'coding': [{\n                            'system': 'http://ehealth.sundhed.dk/cs/activitydefinition-code',\n                            'code': 'TBD'\n                        }\n                    ],\n                    'text': '31d136f2-0b98-4e0a-8f82-f0731b54893d'\n                },\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/49397'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/72791'\n                }\n            }\n        ]\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-execute-careteam-stats"
        },
        "name" : "Execute careteam stats",
        "description" : "### Report Contents\nThis report contains counts of resources associated with CareTeams:\n- EpisodeOfCare\n- CarePlan\n- Task: Count for each task category\n### Grouping \nThis report is grouped by CareTeam. Each group is returned in a separate JSon file.\n### Parameters\n- organization: Filter on CareTeam.managingOrganization match\n- period: Filter on:\n    - CarePlan.period overlap for CarePlans\n    - EpisodeOfCare.period overlap for EpisodeOfCare\n    - Task.authoredOn inside period for Tasks\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nEHealthCareTeam is a Fhir resource. See the implementation guide for details\n\n    {\n        'EHealthCareTeam': {\n            'resourceType': 'CareTeam',\n            'id': '12958',\n            'meta': {\n                'versionId': '1',\n                'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam']\n            },\n            'identifier': [{\n                    'id': '59f70e4e-1c31-4647-8c91-404939b6b14e',\n                    'system': 'urn:ietf:rfc:3986'\n                }\n            ],\n            'status': 'active',\n            'name': '0cea5c11-af39-4e5c-8733-9f532ea9961a',\n            'reasonCode': [{\n                    'coding': [{\n                            'system': 'http://ehealth.sundhed.dk/cs/conditions',\n                            'code': 'TBD'\n                        }\n                    ]\n                }\n            ],\n            'managingOrganization': [{\n                    'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/66642'\n                }\n            ]\n        },\n        'CareTeamSummary': {\n            'episodeOfCareCount': 2,\n            'carePlanCount': 6,\n            'taskCountByCategory': {\n                'MissingMeasurementResolving': 2\n            }\n        }\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-execute-measurement-stats"
        },
        "name" : "Execute measurement stats",
        "description" : "### Report Contents\nThis report contains counts of Measurements for each EpisodeOfCare:\n- Observation\n- QuestionnaireResponse\n- Media\n### Grouping \nThis report is grouped by EpsiodeOfCare. Each group is returned in a separate JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- period: Filter on:\n    - Observation.effective inside period for Observations\n    - Questionnaire.authored inside period for QuestionnaireResponses\n    - Media.occurence inside period for Media\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nEHealthEpisodeOfCare is a Fhir resource. See the implementation guide for details\n\n    {\n        'EHealthEpisodeOfCare': {\n            'resourceType': 'EpisodeOfCare',\n            'id': '21357',\n            'meta': {\n                'versionId': '1',\n                'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare']\n            },\n            'extension': [{\n                    'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization',\n                    'valueReference': {\n                        'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/30170'\n                    }\n                }\n            ],\n            'status': 'active',\n            'diagnosis': [{\n                    'condition': {\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/70274'\n                    },\n                    'rank': 1\n                }\n            ],\n            'patient': {\n                'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/26565'\n            },\n            'managingOrganization': {\n                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/28358'\n            },\n            'period': {\n                'start': '1970-01-01T01:00:01+01:00',\n                'end': '1970-01-01T01:01:40+01:00'\n            }\n        },\n        'EpisodeOfCareMeasurementSummary': {\n            'observationCount': 5,\n            'mediaCount': 0,\n            'questionnaireResponseCount': 0\n        }\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-execute-patient-devices"
        },
        "name" : "Execute patient devices",
        "description" : "### Report Contents\nThis report contains Device information for each EpisodeOfCare:\n- Device\n- DeviceUseStatement\n- DeviceMetrics\n### Grouping \nThis report is grouped by EpsiodeOfCare. Each group is returned in a separate JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- period: Filter on DeviceUseStatement.whenUsed overlap\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nAll returned objects are Fhir resources. See the implementation guide for details\n\n    {\n        'EHealthEpisodeOfCare': {\n            'resourceType': 'EpisodeOfCare',\n            'id': 'F417C17F9FDE24C9090BD629C8EE1697',\n            'meta': {\n                'versionId': '1',\n                'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare']\n            },\n            'extension': [{\n                    'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization',\n                    'valueReference': {\n                        'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/313D8B0E0AC8EA8169D1DA45ECEEACB9'\n                    }\n                }\n            ],\n            'status': 'active',\n            'diagnosis': [{\n                    'condition': {\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/9A7FCD55CA3031585A8F1690DB1D8034'\n                    },\n                    'rank': 1\n                }\n            ],\n            'patient': {\n                'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/A1D94F323D8EF09E5D913D9522FD83C4'\n            },\n            'managingOrganization': {\n                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/8DC75F2B12BCC832F92CC065C3D0B451'\n            },\n            'period': {\n                'start': '1970-01-01T01:00:01+01:00',\n                'end': '1970-01-01T01:01:40+01:00'\n            }\n        },\n        'EHealthDeviceUseStatement': [{\n                'resourceType': 'DeviceUseStatement',\n                'id': '9541E8EAEAD24376F208D5CD8A4D25F5',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context',\n                        'valueReference': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/CarePlan/23D34B29DD02EB232B6575537FE8ADC5'\n                        }\n                    }\n                ],\n                'status': 'active',\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/AC38B1F6391F256002E5A7BE69CB2586'\n                },\n                'device': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/08D51B81A7FE5B480278150A94D4048A'\n                }\n            }\n        ],\n        'EHealthDevice': [{\n                'resourceType': 'Device',\n                'id': '08D51B81A7FE5B480278150A94D4048A',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned',\n                        'valueBoolean': true\n                    }\n                ],\n                'status': 'active'\n            }\n        ],\n        'EHealthDeviceMetric': [{\n                'resourceType': 'DeviceMetric',\n                'id': '7EA21ACD27EE012439F1440574A6BB21',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 5\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 10\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 12\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 14\n                            }\n                        ]\n                    }\n                ],\n                'identifier': {\n                    'value': 'Foo'\n                },\n                'type': {\n                    'text': 'code'\n                },\n                'source': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/08D51B81A7FE5B480278150A94D4048A'\n                },\n                'category': 'calculation'\n            }\n        ]\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-execute-patient-gdpr"
        },
        "name" : "Execute patient GDPR",
        "description" : "### Report Contents\nThis report contains all information related to the specified Patient\n### Grouping \nNone. This report returns a single JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- period: not used.\n- patient: The patient to fetch information for.\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nAll returned objects are Fhir resources. See the implementation guide for details\n\n    {\n        'Patient': {\n            'resourceType': 'Patient',\n            'id': '70791',\n            'meta': {\n                'versionId': '1'\n            }\n        },\n        'Communication': [{\n                'resourceType': 'Communication',\n                'id': '29256',\n                'meta': {\n                    'versionId': '1'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                }\n            }\n        ],\n        'RelatedPerson': [{\n                'resourceType': 'RelatedPerson',\n                'id': '44196',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson']\n                },\n                'identifier': [{\n                        'use': 'official',\n                        'system': 'urn:oid:1.2.208.176.1.2',\n                        'value': '2412001234'\n                    }\n                ],\n                'patient': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791'\n                },\n                'name': [{\n                        'text': 'Tester'\n                    }\n                ]\n            }\n        ],\n        'Appointment': [{\n                'resourceType': 'Appointment',\n                'id': '74036',\n                'meta': {\n                    'versionId': '1'\n                },\n                'participant': [{\n                        'id': '5fda865d-5e46-4fc4-8dcc-9b5f9a6b501a',\n                        'actor': {\n                            'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791'\n                        }\n                    }\n                ]\n            }\n        ],\n        'AppointmentResponse': [{\n                'resourceType': 'AppointmentResponse',\n                'id': '63226',\n                'meta': {\n                    'versionId': '1'\n                },\n                'actor': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791'\n                }\n            }\n        ],\n        'EHealthEpisodeOfCare': [{\n                'resourceType': 'EpisodeOfCare',\n                'id': '10928',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization',\n                        'valueReference': {\n                            'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/43014'\n                        }\n                    }\n                ],\n                'status': 'active',\n                'diagnosis': [{\n                        'condition': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/33654'\n                        },\n                        'rank': 1\n                    }\n                ],\n                'patient': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791'\n                },\n                'managingOrganization': {\n                    'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/34361'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                }\n            }, {\n                'resourceType': 'EpisodeOfCare',\n                'id': '48392',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization',\n                        'valueReference': {\n                            'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/41282'\n                        }\n                    }\n                ],\n                'status': 'active',\n                'diagnosis': [{\n                        'condition': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/87020'\n                        },\n                        'rank': 1\n                    }\n                ],\n                'patient': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/47956'\n                },\n                'managingOrganization': {\n                    'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/34361'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                }\n            }\n        ],\n        'EHealthDeviceUseStatement': [{\n                'resourceType': 'DeviceUseStatement',\n                'id': '4021',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context',\n                        'valueReference': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/CarePlan/87235'\n                        }\n                    }\n                ],\n                'status': 'active',\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/69099'\n                },\n                'device': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729'\n                }\n            }, {\n                'resourceType': 'DeviceUseStatement',\n                'id': '5732',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context',\n                        'valueReference': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/CarePlan/23385'\n                        }\n                    }\n                ],\n                'status': 'active',\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/10543'\n                },\n                'device': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/91432'\n                }\n            }\n        ],\n        'EHealthDevice': [{\n                'resourceType': 'Device',\n                'id': '81729',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned',\n                        'valueBoolean': true\n                    }\n                ],\n                'status': 'active'\n            }, {\n                'resourceType': 'Device',\n                'id': '91432',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned',\n                        'valueBoolean': true\n                    }\n                ],\n                'status': 'active'\n            }\n        ],\n        'EHealthDeviceMetric': [{\n                'resourceType': 'DeviceMetric',\n                'id': '35094',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 5\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 10\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 12\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 14\n                            }\n                        ]\n                    }\n                ],\n                'identifier': {\n                    'value': 'Foo'\n                },\n                'type': {\n                    'text': 'code'\n                },\n                'source': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729'\n                },\n                'category': 'calculation'\n            }, {\n                'resourceType': 'DeviceMetric',\n                'id': '22449',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 5\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 10\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 12\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 14\n                            }\n                        ]\n                    }\n                ],\n                'identifier': {\n                    'value': 'Foo'\n                },\n                'type': {\n                    'text': 'code'\n                },\n                'source': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729'\n                },\n                'category': 'calculation'\n            }\n        ],\n        'EHealthConsent': [{\n                'resourceType': 'Consent',\n                'id': '51690',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-consent']\n                },\n                'status': 'active',\n                'category': [{\n                        'coding': [{\n                                'code': 'TBD'\n                            }\n                        ]\n                    }\n                ],\n                'patient': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                },\n                'consentingParty': [{\n                        'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/41034'\n                    }\n                ],\n                'actor': [{\n                        'id': 'f31bec27-965f-49ea-b8fe-5fdb259c539d',\n                        'role': {\n                            'coding': [{\n                                    'code': 'authserver'\n                                }\n                            ]\n                        },\n                        'reference': {\n                            'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/60499'\n                        }\n                    }\n                ],\n                'policyRule': 'Rule',\n                'data': [{\n                        'meaning': 'related',\n                        'reference': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/51427'\n                        }\n                    }\n                ]\n            }\n        ],\n        'EHealthCarePlan': [{\n                'resourceType': 'CarePlan',\n                'id': '87235',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan']\n                },\n                'definition': [{\n                        'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/98996'\n                    }\n                ],\n                'status': 'draft',\n                'intent': 'option',\n                'category': [{\n                        'coding': [{\n                                'system': 'http://ehealth.sundhed.dk/cs/careplan-category',\n                                'code': 'TBD'\n                            }\n                        ]\n                    }\n                ],\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/55953'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                },\n                'addresses': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/25664'\n                    }\n                ]\n            }, {\n                'resourceType': 'CarePlan',\n                'id': '23385',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan']\n                },\n                'definition': [{\n                        'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/83648'\n                    }\n                ],\n                'status': 'draft',\n                'intent': 'option',\n                'category': [{\n                        'coding': [{\n                                'system': 'http://ehealth.sundhed.dk/cs/careplan-category',\n                                'code': 'TBD'\n                            }\n                        ]\n                    }\n                ],\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/51258'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/48392'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                },\n                'addresses': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/4845'\n                    }\n                ]\n            }\n        ],\n        'EHealthServiceRequest': [{\n                'resourceType': 'ServiceRequest',\n                'id': '18904',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy',\n                        'valueCodeableConcept': {\n                            'coding': [{\n                                    'system': 'http://ehealth.sundhed.dk/cs/measurement-sharing-policies',\n                                    'code': 'TBD'\n                                }\n                            ]\n                        }\n                    }\n                ],\n                'definition': [{\n                        'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/64273'\n                    }\n                ],\n                'status': 'completed',\n                'intent': 'filler-order',\n                'code': {\n                    'coding': [{\n                            'system': 'http://ehealth.sundhed.dk/cs/activitydefinition-code',\n                            'code': 'TBD'\n                        }\n                    ],\n                    'text': '7654414a-7f86-4170-9920-fde60368b58b'\n                },\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/59415'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                }\n            }\n        ],\n        'EHealthCondition': [{\n                'resourceType': 'Condition',\n                'id': '22743',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-condition']\n                },\n                'clinicalStatus': 'active',\n                'code': {\n                    'coding': [{\n                            'system': 'http://ehealth.sundhed.dk/cs/conditions',\n                            'code': 'TBD'\n                        }\n                    ]\n                },\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/84730'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                }\n            }\n        ],\n        'EHealthObservation': [{\n                'resourceType': 'Observation',\n                'id': '55832',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation']\n                },\n                'basedOn': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/69506'\n                    }\n                ],\n                'status': 'amended',\n                'code': {\n                    'coding': [{\n                            'system': 'urn:oid:1.2.208.176.2.1',\n                            'code': 'NPU03011'\n                        }\n                    ]\n                },\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/96798'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                },\n                'effectivePeriod': {\n                    'start': '2020-03-26T13:37:40+01:00',\n                    'end': '2020-03-26T13:37:40+01:00'\n                },\n                'performer': [{\n                        'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/43621'\n                    }\n                ],\n                'device': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/30416'\n                }\n            }\n        ],\n        'EHealthQuestionnaireResponse': [{\n                'resourceType': 'QuestionnaireResponse',\n                'id': '21957',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaireresponse']\n                },\n                'basedOn': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/12403'\n                    }\n                ],\n                'questionnaire': {\n                    'reference': 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/42078'\n                },\n                'status': 'completed',\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/47155'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                },\n                'authored': '2020-03-26T13:37:40+01:00',\n                'source': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/61666'\n                }\n            }\n        ],\n        'EHealthMedia': [{\n                'resourceType': 'Media',\n                'id': '18256',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-media']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-quality',\n                        'extension': [{\n                                'url': 'qualityType',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/quality-types',\n                                            'code': 'TBD'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'qualityCode',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/usage-quality',\n                                            'code': 'TBD'\n                                        }\n                                    ]\n                                }\n                            }\n                        ]\n                    }\n                ],\n                'basedOn': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/98474'\n                    }\n                ],\n                'type': 'audio',\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/20886'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                },\n                'occurrenceDateTime': '2020-03-26T13:37:40+01:00',\n                'content': {\n                    'language': 'en'\n                }\n            }\n        ],\n        'EHealthClinicalImpression': [{\n                'resourceType': 'ClinicalImpression',\n                'id': '39697',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression']\n                },\n                'status': 'draft',\n                'code': {\n                    'coding': [{\n                            'system': 'http://ehealth.sundhed.dk/cs/clinicalimpression-codes',\n                            'code': 'TBD'\n                        }\n                    ]\n                },\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/32140'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                }\n            }\n        ],\n        'EHealthTask': [{\n                'resourceType': 'Task',\n                'id': '96988',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-task']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-task-category',\n                        'valueCodeableConcept': {\n                            'coding': [{\n                                    'system': 'http://ehealth.sundhed.dk/cs/task-category',\n                                    'code': 'TBD'\n                                }\n                            ]\n                        }\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-restriction-category',\n                        'valueCodeableConcept': {\n                            'coding': [{\n                                    'system': 'http://ehealth.sundhed.dk/cs/restriction-category',\n                                    'code': 'None'\n                                }\n                            ]\n                        }\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-task-responsible',\n                        'valueReference': {\n                            'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Practitioner/74334'\n                        }\n                    }\n                ],\n                'status': 'draft',\n                'intent': 'proposal',\n                'priority': 'routine',\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                }\n            }\n        ],\n        'EHealthCommunication': [{\n                'resourceType': 'Communication',\n                'id': '29256',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication']\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                }\n            }\n        ],\n        'EHealthProvenance': [{\n                'resourceType': 'Provenance',\n                'id': '68399',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-provenance']\n                },\n                'target': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                    }\n                ],\n                'recorded': '2020-03-26T13:37:39.772+01:00',\n                'policy': ['policy'],\n                'agent': [{\n                        'whoReference': {\n                            'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/6901'\n                        }\n                    }\n                ]\n            }, {\n                'resourceType': 'Provenance',\n                'id': '96195',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-provenance']\n                },\n                'target': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/48392'\n                    }\n                ],\n                'recorded': '2020-03-26T13:37:39.801+01:00',\n                'policy': ['policy'],\n                'agent': [{\n                        'whoReference': {\n                            'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/45854'\n                        }\n                    }\n                ]\n            }\n        ]\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-execute-patient-total"
        },
        "name" : "Execute patient total",
        "description" : "### Report Contents\nThis report contains clinical information for each Patient\n### Grouping \nThis report is grouped by EpsiodeOfCare. Each group is returned in a separate JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- period: Filter on EpisodeOfCare.period overlap\n- conditionCode: Filter on Condition.code related to EpisodeOfCare\n- status: Filter on EpisodeOfCare.status\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nAll returned objects are Fhir resources. See the implementation guide for details\n\n    {\n        'Patient': {\n            'resourceType': 'Patient',\n            'id': '70791',\n            'meta': {\n                'versionId': '1'\n            }\n        },\n        'EHealthEpisodeOfCare': [{\n                'resourceType': 'EpisodeOfCare',\n                'id': '10928',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization',\n                        'valueReference': {\n                            'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/43014'\n                        }\n                    }\n                ],\n                'status': 'active',\n                'diagnosis': [{\n                        'condition': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/33654'\n                        },\n                        'rank': 1\n                    }\n                ],\n                'patient': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791'\n                },\n                'managingOrganization': {\n                    'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/34361'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                }\n            }, {\n                'resourceType': 'EpisodeOfCare',\n                'id': '48392',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization',\n                        'valueReference': {\n                            'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/41282'\n                        }\n                    }\n                ],\n                'status': 'active',\n                'diagnosis': [{\n                        'condition': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/87020'\n                        },\n                        'rank': 1\n                    }\n                ],\n                'patient': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/47956'\n                },\n                'managingOrganization': {\n                    'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/34361'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                }\n            }\n        ],\n        'EHealthDeviceUseStatement': [{\n                'resourceType': 'DeviceUseStatement',\n                'id': '4021',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context',\n                        'valueReference': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/CarePlan/87235'\n                        }\n                    }\n                ],\n                'status': 'active',\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/69099'\n                },\n                'device': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729'\n                }\n            }, {\n                'resourceType': 'DeviceUseStatement',\n                'id': '5732',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context',\n                        'valueReference': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/CarePlan/23385'\n                        }\n                    }\n                ],\n                'status': 'active',\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/10543'\n                },\n                'device': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/91432'\n                }\n            }\n        ],\n        'EHealthDevice': [{\n                'resourceType': 'Device',\n                'id': '81729',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned',\n                        'valueBoolean': true\n                    }\n                ],\n                'status': 'active'\n            }, {\n                'resourceType': 'Device',\n                'id': '91432',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned',\n                        'valueBoolean': true\n                    }\n                ],\n                'status': 'active'\n            }\n        ],\n        'EHealthDeviceMetric': [{\n                'resourceType': 'DeviceMetric',\n                'id': '35094',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 5\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 10\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 12\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 14\n                            }\n                        ]\n                    }\n                ],\n                'identifier': {\n                    'value': 'Foo'\n                },\n                'type': {\n                    'text': 'code'\n                },\n                'source': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729'\n                },\n                'category': 'calculation'\n            }, {\n                'resourceType': 'DeviceMetric',\n                'id': '22449',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 5\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 10\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 12\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 14\n                            }\n                        ]\n                    }\n                ],\n                'identifier': {\n                    'value': 'Foo'\n                },\n                'type': {\n                    'text': 'code'\n                },\n                'source': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729'\n                },\n                'category': 'calculation'\n            }\n        ],\n        'EHealthConsent': [{\n                'resourceType': 'Consent',\n                'id': '51690',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-consent']\n                },\n                'status': 'active',\n                'category': [{\n                        'coding': [{\n                                'code': 'TBD'\n                            }\n                        ]\n                    }\n                ],\n                'patient': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                },\n                'consentingParty': [{\n                        'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/41034'\n                    }\n                ],\n                'actor': [{\n                        'id': 'f31bec27-965f-49ea-b8fe-5fdb259c539d',\n                        'role': {\n                            'coding': [{\n                                    'code': 'authserver'\n                                }\n                            ]\n                        },\n                        'reference': {\n                            'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/60499'\n                        }\n                    }\n                ],\n                'policyRule': 'Rule',\n                'data': [{\n                        'meaning': 'related',\n                        'reference': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/51427'\n                        }\n                    }\n                ]\n            }\n        ],\n        'EHealthCarePlan': [{\n                'resourceType': 'CarePlan',\n                'id': '87235',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan']\n                },\n                'definition': [{\n                        'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/98996'\n                    }\n                ],\n                'status': 'draft',\n                'intent': 'option',\n                'category': [{\n                        'coding': [{\n                                'system': 'http://ehealth.sundhed.dk/cs/careplan-category',\n                                'code': 'TBD'\n                            }\n                        ]\n                    }\n                ],\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/55953'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                },\n                'addresses': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/25664'\n                    }\n                ]\n            }, {\n                'resourceType': 'CarePlan',\n                'id': '23385',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan']\n                },\n                'definition': [{\n                        'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/83648'\n                    }\n                ],\n                'status': 'draft',\n                'intent': 'option',\n                'category': [{\n                        'coding': [{\n                                'system': 'http://ehealth.sundhed.dk/cs/careplan-category',\n                                'code': 'TBD'\n                            }\n                        ]\n                    }\n                ],\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/51258'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/48392'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                },\n                'addresses': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/4845'\n                    }\n                ]\n            }\n        ],\n        'EHealthServiceRequest': [{\n                'resourceType': 'ServiceRequest',\n                'id': '18904',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy',\n                        'valueCodeableConcept': {\n                            'coding': [{\n                                    'system': 'http://ehealth.sundhed.dk/cs/measurement-sharing-policies',\n                                    'code': 'TBD'\n                                }\n                            ]\n                        }\n                    }\n                ],\n                'definition': [{\n                        'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/64273'\n                    }\n                ],\n                'status': 'completed',\n                'intent': 'filler-order',\n                'code': {\n                    'coding': [{\n                            'system': 'http://ehealth.sundhed.dk/cs/activitydefinition-code',\n                            'code': 'TBD'\n                        }\n                    ],\n                    'text': '7654414a-7f86-4170-9920-fde60368b58b'\n                },\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/59415'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                }\n            }\n        ],\n        'EHealthCondition': [{\n                'resourceType': 'Condition',\n                'id': '22743',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-condition']\n                },\n                'clinicalStatus': 'active',\n                'code': {\n                    'coding': [{\n                            'system': 'http://ehealth.sundhed.dk/cs/conditions',\n                            'code': 'TBD'\n                        }\n                    ]\n                },\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/84730'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                }\n            }\n        ],\n        'EHealthObservation': [{\n                'resourceType': 'Observation',\n                'id': '55832',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation']\n                },\n                'basedOn': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/69506'\n                    }\n                ],\n                'status': 'amended',\n                'code': {\n                    'coding': [{\n                            'system': 'urn:oid:1.2.208.176.2.1',\n                            'code': 'NPU03011'\n                        }\n                    ]\n                },\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/96798'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                },\n                'effectivePeriod': {\n                    'start': '2020-03-26T13:37:40+01:00',\n                    'end': '2020-03-26T13:37:40+01:00'\n                },\n                'performer': [{\n                        'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/43621'\n                    }\n                ],\n                'device': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/30416'\n                }\n            }\n        ],\n        'EHealthQuestionnaireResponse': [{\n                'resourceType': 'QuestionnaireResponse',\n                'id': '21957',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaireresponse']\n                },\n                'basedOn': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/12403'\n                    }\n                ],\n                'questionnaire': {\n                    'reference': 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/42078'\n                },\n                'status': 'completed',\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/47155'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                },\n                'authored': '2020-03-26T13:37:40+01:00',\n                'source': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/61666'\n                }\n            }\n        ],\n        'EHealthMedia': [{\n                'resourceType': 'Media',\n                'id': '18256',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-media']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-quality',\n                        'extension': [{\n                                'url': 'qualityType',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/quality-types',\n                                            'code': 'TBD'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'qualityCode',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/usage-quality',\n                                            'code': 'TBD'\n                                        }\n                                    ]\n                                }\n                            }\n                        ]\n                    }\n                ],\n                'basedOn': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/98474'\n                    }\n                ],\n                'type': 'audio',\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/20886'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                },\n                'occurrenceDateTime': '2020-03-26T13:37:40+01:00',\n                'content': {\n                    'language': 'en'\n                }\n            }\n        ],\n        'EHealthClinicalImpression': [{\n                'resourceType': 'ClinicalImpression',\n                'id': '39697',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression']\n                },\n                'status': 'draft',\n                'code': {\n                    'coding': [{\n                            'system': 'http://ehealth.sundhed.dk/cs/clinicalimpression-codes',\n                            'code': 'TBD'\n                        }\n                    ]\n                },\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/32140'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                }\n            }\n        ]\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-execute-practitioner-gdpr"
        },
        "name" : "Execute practitioner GDPR",
        "description" : "### Report Contents\nThis report contains all information related to the specified Practitioner\n- Practitioner\n- CareTeam\n- PractitionerRole\n### Grouping \nNone. The report is returned in a single JSon file.\n### Parameters\n- organization: \n    - Practitioner: Not filtered\n    - CareTeam: Filter on CareTeam.ManagingOrganization match\n    - PractitionerRole: Filter on PractitionerRole.Organization match\n- period: not used\n- practitionerID: The practitioner to fetch information for\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nAll returned objects are Fhir resources. See the implementation guide for details\n\n    {\n        'EHealthPractitioner': {\n            'resourceType': 'Practitioner',\n            'id': '20599',\n            'meta': {\n                'versionId': '1',\n                'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner']\n            },\n            'name': [{\n                    'family': '2f82a48c-61cc-4c7f-855a-3e6b59729ef1'\n                }\n            ]\n        },\n        'EHealthPractitionerRole': [],\n        'EHealthCareTeam': [{\n                'resourceType': 'CareTeam',\n                'id': '99438',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam']\n                },\n                'identifier': [{\n                        'id': 'f556eab1-dbe9-40e3-9edd-149fa3bd1ae0',\n                        'system': 'urn:ietf:rfc:3986'\n                    }\n                ],\n                'status': 'active',\n                'name': 'f9d27974-6a6a-44fb-b6eb-bcd22d769a18',\n                'participant': [{\n                        'member': {\n                            'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Practitioner/20599'\n                        }\n                    }\n                ],\n                'reasonCode': [{\n                        'coding': [{\n                                'system': 'http://ehealth.sundhed.dk/cs/conditions',\n                                'code': 'TBD'\n                            }\n                        ]\n                    }\n                ],\n                'managingOrganization': [{\n                        'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/94174'\n                    }\n                ]\n            }\n        ]\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-execute-practitioner-stats"
        },
        "name" : "Execute practitioner stats",
        "description" : "### Report Contents\nThis report contains counts of practitioners associated with Organizations and CareTeams\n- List of Organization and associated practitonerCount\n- List of CareTeam and associated practitionerCount\n### Grouping \nNone. The report is returned in a single JSon file.\n### Parameters\n- organization: \n    - CareTeam: Filter on CareTeam.ManagingOrganization match\n    - PractitionerRole: Filter on PractitionerRole.Organization match\n- period\n    - CareTeam: Filter on CareTeam.participant.period overlap\n    - PractitionerRole: Filter on PractitionerRole.perid overlap\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nOrganization and CareTeam are Fhir resources. See the implementation guide for details\n\n    {\n        'PractitionerSummary': {\n            'organizationPractitionerStatistics': [{\n                    'organization': {\n                        'resourceType': 'Organization',\n                        'id': '69075',\n                        'meta': {\n                            'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization']\n                        },\n                        'extension': [{\n                                'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-source',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/organization-source',\n                                            'code': 'manual'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-synchronizationStatus',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/organization-synchronization-status',\n                                            'code': 'NotSynchronized'\n                                        }\n                                    ]\n                                }\n                            }\n                        ],\n                        'name': 'e7c2b264-b2d9-4a6d-aba9-f23be1017d39'\n                    },\n                    'practitionerCount': 1\n                }\n            ],\n            'careTeamPractitionerStatistics': [{\n                    'careTeam': {\n                        'resourceType': 'CareTeam',\n                        'id': '44267',\n                        'meta': {\n                            'versionId': '1',\n                            'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam']\n                        },\n                        'identifier': [{\n                                'id': '7ced02e2-3082-4e02-86cc-030e8df8906d',\n                                'system': 'urn:ietf:rfc:3986'\n                            }\n                        ],\n                        'status': 'active',\n                        'name': 'd1e7d427-1565-42f6-951d-5508d494d4c8',\n                        'reasonCode': [{\n                                'coding': [{\n                                        'system': 'http://ehealth.sundhed.dk/cs/conditions',\n                                        'code': 'TBD'\n                                    }\n                                ]\n                            }\n                        ],\n                        'managingOrganization': [{\n                                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/69075'\n                            }\n                        ]\n                    },\n                    'practitionerCount': 0\n                }, {\n                    'careTeam': {\n                        'resourceType': 'CareTeam',\n                        'id': '40831',\n                        'meta': {\n                            'versionId': '1',\n                            'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam']\n                        },\n                        'identifier': [{\n                                'id': 'f12b2b87-95d9-487c-b088-457acfa1693f',\n                                'system': 'urn:ietf:rfc:3986'\n                            }\n                        ],\n                        'status': 'active',\n                        'name': 'c572c5ac-bac3-4f9e-b948-795db7563145',\n                        'reasonCode': [{\n                                'coding': [{\n                                        'system': 'http://ehealth.sundhed.dk/cs/conditions',\n                                        'code': 'TBD'\n                                    }\n                                ]\n                            }\n                        ],\n                        'managingOrganization': [{\n                                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/69075'\n                            }\n                        ]\n                    },\n                    'practitionerCount': 0\n                }, {\n                    'careTeam': {\n                        'resourceType': 'CareTeam',\n                        'id': '78765',\n                        'meta': {\n                            'versionId': '1',\n                            'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam']\n                        },\n                        'identifier': [{\n                                'id': '7378e850-aff6-430d-9e86-cca801bf2375',\n                                'system': 'urn:ietf:rfc:3986'\n                            }\n                        ],\n                        'status': 'active',\n                        'name': '3e038dd3-9e80-41e4-9932-8597f8706da4',\n                        'reasonCode': [{\n                                'coding': [{\n                                        'system': 'http://ehealth.sundhed.dk/cs/conditions',\n                                        'code': 'TBD'\n                                    }\n                                ]\n                            }\n                        ],\n                        'managingOrganization': [{\n                                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/69075'\n                            }\n                        ]\n                    },\n                    'practitionerCount': 0\n                }, {\n                    'careTeam': {\n                        'resourceType': 'CareTeam',\n                        'id': '46096',\n                        'meta': {\n                            'versionId': '1',\n                            'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam']\n                        },\n                        'identifier': [{\n                                'id': '37a66140-dc7e-4ea4-9ec7-d0dd91adf7c8',\n                                'system': 'urn:ietf:rfc:3986'\n                            }\n                        ],\n                        'status': 'active',\n                        'name': '311ebab3-d310-44bb-b72b-65bdf74b3729',\n                        'reasonCode': [{\n                                'coding': [{\n                                        'system': 'http://ehealth.sundhed.dk/cs/conditions',\n                                        'code': 'TBD'\n                                    }\n                                ]\n                            }\n                        ],\n                        'managingOrganization': [{\n                                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/69075'\n                            }\n                        ]\n                    },\n                    'practitionerCount': 0\n                }, {\n                    'careTeam': {\n                        'resourceType': 'CareTeam',\n                        'id': '32543',\n                        'meta': {\n                            'versionId': '1',\n                            'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam']\n                        },\n                        'identifier': [{\n                                'id': '3671c951-d20e-4d5c-82ec-fae5ee03821e',\n                                'system': 'urn:ietf:rfc:3986'\n                            }\n                        ],\n                        'status': 'active',\n                        'name': '1f74a06c-8ae1-4b5c-b5ee-49abfd2d28e1',\n                        'reasonCode': [{\n                                'coding': [{\n                                        'system': 'http://ehealth.sundhed.dk/cs/conditions',\n                                        'code': 'TBD'\n                                    }\n                                ]\n                            }\n                        ],\n                        'managingOrganization': [{\n                                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/69075'\n                            }\n                        ]\n                    },\n                    'practitionerCount': 0\n                }\n            ]\n        }\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-execute-questionnaireresponses"
        },
        "name" : "Execute questionnare responses",
        "description" : "### Report Contents\nThis report contains a collection of questionnaire responses and related resources\n- Organizations\n- CareTeams\n- PlanDefinitions\n- ActivityDefinitions\n- Questionnaires\n- QuestionnaireResponses\n- Communication\n- ServiceRequestSummary\n### Grouping \nThis report is grouped by Questionnaire. Each group is returned as a FHIR bundle in a separate JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- condition: Filter on CarePlan.addresses.code match\n- period: Filter on QuestionnaireResponse.authored within period\n- plan: Filter on Plan match\n- questionnaire: Filter on ActivityDefinition.composed-of match\n- careteam: Filter on careteam in CarePlan.careteam or EpisodeOfCare.team\n- tag: Filter on tag match\n\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\n### Output\n{\n  'resourceType' : 'Bundle',\n  'id' : 'Questionnaire/44529',\n  'entry' : [ {\n    'fullUrl' : 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/24206/_history/1',\n    'resource' : {\n      'resourceType' : 'PlanDefinition',\n      'id' : '24206',\n      'meta' : {\n        'versionId' : '1',\n        'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition' ]\n      },\n      'extension' : [ {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role',\n        'extension' : [ {\n          'url' : 'reference',\n          'valueReference' : {\n            'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/14291'\n          }\n        }, {\n          'url' : 'role',\n          'valueCodeableConcept' : {\n            'coding' : [ {\n              'system' : 'http://ehealth.sundhed.dk/cs/modifier-role',\n              'code' : 'owner'\n            } ]\n          }\n        } ]\n      } ],\n      'version' : '1.0',\n      'status' : 'active',\n      'action' : [ {\n        'definitionCanonical' : 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/10919'\n      } ]\n    }\n  }, {\n    'fullUrl' : 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/10919/_history/1',\n    'resource' : {\n      'resourceType' : 'ActivityDefinition',\n      'id' : '10919',\n      'meta' : {\n        'versionId' : '1',\n        'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-activitydefinition' ]\n      },\n      'extension' : [ {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy',\n        'valueCodeableConcept' : {\n          'coding' : [ {\n            'system' : 'http://ehealth.sundhed.dk/cs/measurement-sharing-policies',\n            'code' : 'noSharing'\n          } ]\n        }\n      }, {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role',\n        'extension' : [ {\n          'url' : 'reference',\n          'valueReference' : {\n            'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/25403'\n          }\n        }, {\n          'url' : 'role',\n          'valueCodeableConcept' : {\n            'coding' : [ {\n              'system' : 'http://ehealth.sundhed.dk/cs/modifier-role',\n              'code' : 'owner'\n            } ]\n          }\n        } ]\n      } ],\n      'version' : '1.0',\n      'name' : '0ca879ed-678c-4439-aa4a-efc597f92dfb',\n      'status' : 'active',\n      'topic' : [ {\n        'coding' : [ {\n          'system' : 'http://terminology.hl7.org/CodeSystem/definition-topic',\n          'code' : 'treatment'\n        } ]\n      } ],\n      'relatedArtifact' : [ {\n        'type' : 'composed-of',\n        'resource' : 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/44529'\n      } ],\n      'code' : {\n        'coding' : [ {\n          'system' : 'http://ehealth.sundhed.dk/cs/activitydefinition-code',\n          'code' : '273586006'\n        } ]\n      }\n    }\n  }, {\n    'fullUrl' : 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/44529/_history/1',\n    'resource' : {\n      'resourceType' : 'Questionnaire',\n      'id' : '44529',\n      'meta' : {\n        'versionId' : '1',\n        'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire' ]\n      },\n      'extension' : [ {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-type',\n        'valueCodeableConcept' : {\n          'coding' : [ {\n            'system' : 'http://ehealth.sundhed.dk/cs/questionnaire-types',\n            'code' : 'QQ'\n          } ]\n        }\n      }, {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role',\n        'extension' : [ {\n          'url' : 'reference',\n          'valueReference' : {\n            'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/24153'\n          }\n        }, {\n          'url' : 'role',\n          'valueCodeableConcept' : {\n            'coding' : [ {\n              'system' : 'http://ehealth.sundhed.dk/cs/modifier-role',\n              'code' : 'owner'\n            } ]\n          }\n        } ]\n      } ],\n      'version' : '1.0',\n      'name' : '090b990e-046a-4374-b7c6-b08613a41cce',\n      'status' : 'active'\n    }\n  }, {\n    'fullUrl' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/98618/_history/1',\n    'resource' : {\n      'resourceType' : 'Organization',\n      'id' : '98618',\n      'meta' : {\n        'versionId' : '1',\n        'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization' ]\n      },\n      'extension' : [ {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-source',\n        'valueCodeableConcept' : {\n          'coding' : [ {\n            'system' : 'http://ehealth.sundhed.dk/cs/organization-source',\n            'code' : 'manual'\n          } ]\n        }\n      }, {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-synchronizationStatus',\n        'valueCodeableConcept' : {\n          'coding' : [ {\n            'system' : 'http://ehealth.sundhed.dk/cs/organization-synchronization-status',\n            'code' : 'NotSynchronized'\n          } ]\n        }\n      } ],\n      'identifier' : [ {\n        'use' : 'official',\n        'system' : 'urn:oid:2.16.840.1.113883.2.24.1.1',\n        'value' : '11111111',\n        'period' : {\n          'start' : '2023-10-10T14:49:12+02:00'\n        }\n      } ],\n      'active' : false,\n      'name' : 'defaultTestFactory-be16f47b-1f8a-4440-a02e-23da1219b0ca',\n      'partOf' : {\n        'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/22124'\n      }\n    }\n  }, {\n    'fullUrl' : 'https://organization.local.ehealth.sundhed.dk/fhir/CareTeam/87455/_history/1',\n    'resource' : {\n      'resourceType' : 'CareTeam',\n      'id' : '87455',\n      'meta' : {\n        'versionId' : '1',\n        'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam' ]\n      },\n      'identifier' : [ {\n        'system' : 'urn:ietf:rfc:3986',\n        'value' : 'urn:uuid:9658ef5f-019a-4c90-9c41-f3ad14a31777'\n      } ],\n      'status' : 'active',\n      'name' : '1b900db5-09dd-4563-b612-2b81201fab16',\n      'reasonCode' : [ {\n        'coding' : [ {\n          'system' : 'urn:oid:1.2.208.176.2.4',\n          'code' : 'DJ44'\n        } ]\n      } ]\n    }\n  }, {\n    'fullUrl' : 'https://measurement.local.ehealth.sundhed.dk/fhir/QuestionnaireResponse/92491/_history/1',\n    'resource' : {\n      'resourceType' : 'QuestionnaireResponse',\n      'id' : '92491',\n      'meta' : {\n        'versionId' : '1',\n        'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaireresponse' ]\n      },\n      'extension' : [ {\n        'url' : 'http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare',\n        'valueReference' : {\n          'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/22208'\n        }\n      }, {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-resolved-timing',\n        'extension' : [ {\n          'url' : 'serviceRequestVersionId',\n          'valueId' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439/_history/1'\n        }, {\n          'url' : 'start',\n          'valueDateTime' : '2023-10-10T14:49:12+02:00'\n        }, {\n          'url' : 'end',\n          'valueDateTime' : '2023-10-10T14:49:12+02:00'\n        }, {\n          'url' : 'type',\n          'valueCodeableConcept' : {\n            'coding' : [ {\n              'system' : 'http://ehealth.sundhed.dk/cs/resolved-timing-type',\n              'code' : 'Resolved'\n            } ]\n          }\n        } ]\n      } ],\n      'basedOn' : [ {\n        'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439'\n      } ],\n      'questionnaire' : 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/44529',\n      'status' : 'completed',\n      'subject' : {\n        'reference' : 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/64465'\n      },\n      'authored' : '2023-10-10T14:49:12+02:00',\n      'source' : {\n        'reference' : 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/75218'\n      }\n    }\n  }, {\n    'fullUrl' : 'https://patient.local.ehealth.sundhed.dk/fhir/Communication/97180/_history/1',\n    'resource' : {\n      'resourceType' : 'Communication',\n      'id' : '97180',\n      'meta' : {\n        'versionId' : '1',\n        'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication' ]\n      },\n      'extension' : [ {\n        'url' : 'http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare',\n        'valueReference' : {\n          'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/14233'\n        }\n      }, {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-restriction-category',\n        'valueCodeableConcept' : {\n          'coding' : [ {\n            'system' : 'http://ehealth.sundhed.dk/cs/restriction-category',\n            'code' : 'None'\n          } ]\n        }\n      } ],\n      'basedOn' : [ {\n        'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439'\n      } ],\n      'status' : 'in-progress',\n      'category' : [ {\n        'coding' : [ {\n          'system' : 'http://ehealth.sundhed.dk/cs/communication-category',\n          'code' : 'annotation'\n        } ]\n      }, {\n        'coding' : [ {\n          'system' : 'http://ehealth.sundhed.dk/cs/message-category',\n          'code' : 'advice'\n        } ]\n      } ],\n      'subject' : {\n        'reference' : 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/35194'\n      },\n      'topic' : {\n        'coding' : [ {\n          'system' : 'http://terminology.hl7.org/CodeSystem/communication-topic',\n          'code' : 'report-labs'\n        } ]\n      },\n      'sent' : '2023-10-10T14:49:12+02:00',\n      'reasonCode' : [ {\n        'coding' : [ {\n          'system' : 'http://ehealth.sundhed.dk/cs/message-reasonCode',\n          'code' : 'ReminderSubmitMeasurement'\n        } ]\n      } ]\n    }\n  }, {\n    'fullUrl' : 'urn:uuid:57cfd6a7-dd43-4caa-8220-d50c77aebd8b',\n    'resource' : {\n      'resourceType' : 'Parameters',\n      'parameter' : [ {\n        'name' : 'serviceRequestResponseSummary',\n        'part' : [ {\n          'name' : 'serviceRequest',\n          'valueReference' : {\n            'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439'\n          },\n          'part' : [ {\n            'name' : 'condition',\n            'valueCoding' : {\n              'system' : 'urn:oid:1.2.208.176.2.4',\n              'code' : 'DJ44',\n              'display' : 'Kronisk obstruktiv lungesygdom'\n            }\n          }, {\n            'name' : 'episodeOfCareManagingOrganization',\n            'valueReference' : {\n              'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/98618'\n            }\n          }, {\n            'name' : 'episodeOfCarePeriod',\n            'valuePeriod' : {\n              'start' : '1970-01-01T01:00:01+01:00',\n              'end' : '1970-01-01T01:01:40+01:00'\n            }\n          }, {\n            'name' : 'patientIdentifier',\n            'valueIdentifier' : {\n              'system' : 'urn:oid:1.2.208.176.1.2',\n              'value' : '0101010001'\n            }\n          }, {\n            'name' : 'statusHistory',\n            'part' : [ {\n              'name' : 'statusPeriod',\n              'part' : [ {\n                'name' : 'status',\n                'valueCoding' : {\n                  'system' : 'http://hl7.org/fhir/request-status',\n                  'code' : 'draft'\n                }\n              }, {\n                'name' : 'period',\n                'valuePeriod' : {\n                  'start' : '2023-10-02T12:49:12+00:00',\n                  'end' : '2023-10-03T12:49:12+00:00'\n                }\n              } ]\n            }, {\n              'name' : 'statusPeriod',\n              'part' : [ {\n                'name' : 'status',\n                'valueCoding' : {\n                  'system' : 'http://hl7.org/fhir/request-status',\n                  'code' : 'active'\n                }\n              }, {\n                'name' : 'period',\n                'valuePeriod' : {\n                  'start' : '2023-10-03T12:49:12+00:00',\n                  'end' : '2023-10-04T12:49:12+00:00'\n                }\n              } ]\n            }, {\n              'name' : 'statusPeriod',\n              'part' : [ {\n                'name' : 'status',\n                'valueCoding' : {\n                  'system' : 'http://hl7.org/fhir/request-status',\n                  'code' : 'on-hold'\n                }\n              }, {\n                'name' : 'period',\n                'valuePeriod' : {\n                  'start' : '2023-10-04T12:49:12+00:00',\n                  'end' : '2023-10-05T12:49:12+00:00'\n                }\n              } ]\n            }, {\n              'name' : 'statusPeriod',\n              'part' : [ {\n                'name' : 'status',\n                'valueCoding' : {\n                  'system' : 'http://hl7.org/fhir/request-status',\n                  'code' : 'active'\n                }\n              }, {\n                'name' : 'period',\n                'valuePeriod' : {\n                  'start' : '2023-10-05T12:49:12+00:00',\n                  'end' : '2023-10-08T12:49:12+00:00'\n                }\n              } ]\n            }, {\n              'name' : 'statusPeriod',\n              'part' : [ {\n                'name' : 'status',\n                'valueCoding' : {\n                  'system' : 'http://hl7.org/fhir/request-status',\n                  'code' : 'on-hold'\n                }\n              }, {\n                'name' : 'period',\n                'valuePeriod' : {\n                  'start' : '2023-10-08T12:49:12+00:00'\n                }\n              } ]\n            } ]\n          }, {\n            'name' : 'involvedCareTeams',\n            'part' : [ {\n              'name' : 'careTeam',\n              'valueReference' : {\n                'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/CareTeam/87455'\n              }\n            } ]\n          }, {\n            'name' : 'responses',\n            'part' : [ {\n              'name' : 'response',\n              'part' : [ {\n                'name' : 'occurrence',\n                'part' : [ {\n                  'name' : 'serviceRequestVersionId',\n                  'valueId' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439/_history/1'\n                }, {\n                  'name' : 'start',\n                  'valueDateTime' : '2023-10-10T14:49:12+02:00'\n                }, {\n                  'name' : 'end',\n                  'valueDateTime' : '2023-10-10T14:49:12+02:00'\n                }, {\n                  'name' : 'type',\n                  'valueCodeableConcept' : {\n                    'coding' : [ {\n                      'system' : 'http://ehealth.sundhed.dk/cs/resolved-timing-type',\n                      'code' : 'Resolved'\n                    } ]\n                  }\n                } ]\n              }, {\n                'name' : 'questionnaireResponse',\n                'valueReference' : {\n                  'reference' : 'https://measurement.local.ehealth.sundhed.dk/fhir/QuestionnaireResponse/92491'\n                }\n              }, {\n                'name' : 'submitted',\n                'valueDateTime' : '2023-10-10T12:49:12+00:00'\n              } ]\n            } ]\n          }, {\n            'name' : 'communications',\n            'part' : [ {\n              'name' : 'communication',\n              'valueReference' : {\n                'reference' : 'https://patient.local.ehealth.sundhed.dk/fhir/Communication/97180'\n              }\n            } ]\n          } ]\n        } ]\n      } ]\n    }\n  } ]\n}",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-execute-ssl-orders"
        },
        "name" : "Execute ssl orders",
        "description" : "### Report Contents\nThis report contains SSL Orders\n- OrderDetails\n- OrderLines\n- TraceLines\n### Grouping \nOrder. Each Order is returned in a single JSon file.\n### Parameters\n- organization: Filter on Order.buyer\n- period: Filter on TraceLine.timestamp\n- seller: Filter on Order.seller\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nAll returned objects are SSL resources. See the SSL API description for details\n\n    {\n        'OrderDetails': {\n            'order': {\n                'id': 'https://ssl-order.local.ehealth.sundhed.dk/v1/order/ORDER',\n                'threadId': null,\n                'identifiers': null,\n                'status': null,\n                'priority': null,\n                'notes': null,\n                'buyer': 'https://ssl-order.local.ehealth.sundhed.dk/v1/party/BUYER',\n                'seller': 'https://ssl-order.local.ehealth.sundhed.dk/v1/party/SELLER',\n                'sellerDeliveryContactEmail': null,\n                'carePlanRef': null,\n                'carePlanTitle': null,\n                'earliestDeliveryDate': null,\n                'latestDeliveryDate': null,\n                'receiver': null\n            },\n            'orderLines': [{\n                    'id': 'https://ssl-order.local.ehealth.sundhed.dk/v1/order-line/ORDERLINE',\n                    'order': 'https://ssl-order.local.ehealth.sundhed.dk/v1/order/ORDER',\n                    'status': null,\n                    'item': null,\n                    'agreedDate': null,\n                    'device': null\n                }\n            ],\n            'traceLines': [{\n                    'id': 'https://ssl-order.local.ehealth.sundhed.dk/v1/order/ORDER/1',\n                    'timestamp': '2019-12-24T18:00:00Z',\n                    'createdByOrganization': null,\n                    'createdByUser': null,\n                    'text': null,\n                    'supplementaryText': null,\n                    'order': 'https://ssl-order.local.ehealth.sundhed.dk/v1/order/ORDER',\n                    'orderLine': null,\n                    'statusChange': null\n                }\n            ]\n        }\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-execute-patient-usage-stats"
        },
        "name" : "Execute unique active citizens total",
        "description" : "### Report Contents\nThis report contains an overview of the number of unique active citizens with Episodes of Care, shown both on monthly and yearly basis.\n### Grouping \nThis report is grouped by months and years. All groups are contained in the same JSON file.\n### Parameters\n- None\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing a JSon file corresponding to the report groups.\n### Example output\nAll returned objects are Fhir resources. See the implementation guide for details\nFirst example is the monthly data:\n\n{\n\t'PatientsUsageSummary': {\n\t\t'monthData': [\n\t\t\t{\n\t\t\t\t'month': '1',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '2',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '3',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '4',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '5',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '6',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '7',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '8',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '9',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '10',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '11',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '12',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t}\n      ]\n   }\n}\n\nSecond example is the yearly data:\n\n{\n\t'PatientsUsageSummary': {\n\t\t'yearData': [\n\t\t\t{\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 12,\n\t\t\t\t\t\t'average': 1.0,\n\t\t\t\t\t\t'usageBaseline': 10000,\n\t\t\t\t\t\t'averageRounded': 1000.0,\n\t\t\t\t\t\t'averageBeyondBaseline': 0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 12,\n\t\t\t\t\t\t'average': 1.0,\n\t\t\t\t\t\t'usageBaseline': 10000,\n\t\t\t\t\t\t'averageRounded': 1000.0,\n\t\t\t\t\t\t'averageBeyondBaseline': 0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t}\n      ]\n   }\n}",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/PlanDefinition-i-export"
        },
        "name" : "Export a PlanDefinition",
        "description" : "Export a PlanDefinition.\n### Export Contents\nThe export contains the PlanDefinition including referenced resources:- PlanDefinitions\n- ActivityDefinitions\n- Questionnaires\n- Libraries\n- Organizations\n- DocumentReference + QFDD\n\nEach resource is returned in a separate JSon file.\n### Parameters\n- exclude: references to ActivityDefinitions or PlanDefinitions to exclude from the export.\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files.\nAll returned objects are Fhir resources. See the implementation guide for details",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/ehealth-appointment-toical"
        },
        "name" : "Export Appointment to iCal",
        "description" : "This operation exports the Appointment to an iCal [RFC-5545](https://tools.ietf.org/html/rfc5545) format",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Parameters"
          }
        ],
        "reference" : {
          "reference" : "Parameters/expParam"
        },
        "name" : "expParam",
        "description" : "Expansion parameter",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-external-identifier"
        },
        "name" : "ExternalIdentifier",
        "description" : "External Identifier. Note that this Identifier does not have to unique within the Questionnaire.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-facility-type-codes"
        },
        "name" : "Facility Type Codes",
        "description" : "Allowed value set for healthcare facility type code represents the type of organizational setting of the clinical encounter during which the documented act occurred.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-questionnaire-feedback"
        },
        "name" : "Feedback",
        "description" : "Feedback if reponse is within the defined range.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-fetch-careplan-and-episode-of-care-stats"
        },
        "name" : "Fetch careplan and episode of care stats",
        "description" : "### Report Contents\nThis report contains a count of active EpisodeOfCare and CarePlans.\n### Grouping \nThis report is grouped by ConditionCode. Each group is returned in a separate JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- period: Filter on CarePlan.period overlap\n\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nThe ConditionCode is a Fhir CodeableConcept. See the implementation guide for details\n\n    {\n        'ConditionCode': {\n            'valueCodeableConcept': {\n                'coding': [{\n                        'system': 'urn:oid:1.2.208.176.2.4',\n                        'code': 'DJ44'\n                    }\n                ]\n            }\n        },\n        'ConditionSummary': {\n            'activeEpisodeOfCareCount': 1,\n            'activeCarePlanCount': 1\n        }\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-fetch-careplan-customization-stats"
        },
        "name" : "Fetch careplan customization stats",
        "description" : "### Report Contents\nThis report contains a count of patient specific modifications of:\n- Measurement schedule timing\n- Reference ranges\n### Grouping \nThis report is grouped by PlanDefinition. Each group is returned in a separate JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- period: Filter on CarePlan.period overlap\n\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nEHealthPlanDefinition is a Fhir resource. See the implementation guide for details\n\n    {\n        'EHealthPlanDefinition': {\n            'resourceType': 'PlanDefinition',\n            'id': '53450',\n            'meta': {\n                'versionId': '1',\n                'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition']\n            },\n            'extension': [{\n                    'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role',\n                    'extension': [{\n                            'url': 'reference',\n                            'valueReference': {\n                                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/85109'\n                            }\n                        }, {\n                            'url': 'role',\n                            'valueCodeableConcept': {\n                                'coding': [{\n                                        'system': 'http://ehealth.sundhed.dk/cs/modifier-role',\n                                        'code': 'owner'\n                                    }\n                                ]\n                            }\n                        }\n                    ]\n                }\n            ],\n            'version': '97219ba1-2202-42a1-b99d-45de3a506b40',\n            'status': 'active'\n        },\n        'CarePlanCustomizationSummary': {\n            'timingCustomizationCount': 1,\n            'referenceRangeCustomizationCount': 1\n        }\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-fetch-careplan-duration-stats"
        },
        "name" : "Fetch careplan duration stats",
        "description" : "### Report Contents\nThis report contains statistics on status changes for CarePlans:\n- count: Number of CarePlans in each state\n- min: Shortest time spent in each state\n- max: Longest time spent in each state\n- sum: Sum of time spent in each state\n- average: Average time spent in each state.\n \nThe durations are specified in [ISO 8601](https://www.digi.com/resources/documentation/digidocs/90001437-13/reference/r_iso_8601_duration_format.htm) format.\n### Grouping \nThis report is grouped by PlanDefinition. Each group is returned in a separate JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- period: Filter on CarePlan.period overlap\n- condition: Filter on EpisodeOfCare condition match\n\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nEHealthPlanDefinition is a Fhir resource. See the implementation guide for details\n\n    {\n        'EHealthPlanDefinition': {\n            'resourceType': 'PlanDefinition',\n            'id': '257',\n            'meta': {\n                'versionId': '1',\n                'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition']\n            },\n            'extension': [{\n                    'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role',\n                    'extension': [{\n                            'url': 'reference',\n                            'valueReference': {\n                                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/73753'\n                            }\n                        }, {\n                            'url': 'role',\n                            'valueCodeableConcept': {\n                                'coding': [{\n                                        'system': 'http://ehealth.sundhed.dk/cs/modifier-role',\n                                        'code': 'owner'\n                                    }\n                                ]\n                            }\n                        }\n                    ]\n                }\n            ],\n            'version': 'dc9ecd87-163f-4d2f-bdfe-434085eafe4f',\n            'status': 'active'\n        },\n        'CarePlanStatusDurationSummary': {\n            'statusDurationStatistics': {\n                'draft': {\n                    'status': {\n                        'valueCodeableConcept': {\n                            'coding': [{\n                                    'system': 'http://hl7.org/fhir/care-plan-status',\n                                    'code': 'draft'\n                                }\n                            ]\n                        }\n                    },\n                    'durationStatistics': {\n                        'count': 2,\n                        'min': 'P10DT10H0M0S',\n                        'max': 'P15DT0H0M0S',\n                        'sum': 'P25DT10H0M0S',\n                        'average': 'P12DT17H0M0S'\n                    }\n                },\n                'active': {\n                    'status': {\n                        'valueCodeableConcept': {\n                            'coding': [{\n                                    'system': 'http://hl7.org/fhir/care-plan-status',\n                                    'code': 'active'\n                                }\n                            ]\n                        }\n                    },\n                    'durationStatistics': {\n                        'count': 2,\n                        'min': 'P200DT0H0M0S',\n                        'max': 'P200DT0H0M0S',\n                        'sum': 'P400DT0H0M0S',\n                        'average': 'P200DT0H0M0S'\n                    }\n                },\n                'completed': {\n                    'status': {\n                        'valueCodeableConcept': {\n                            'coding': [{\n                                    'system': 'http://hl7.org/fhir/care-plan-status',\n                                    'code': 'completed'\n                                }\n                            ]\n                        }\n                    },\n                    'durationStatistics': {\n                        'count': 2,\n                        'min': 'P284DT14H0M0S',\n                        'max': 'P380DT0H0M0S',\n                        'sum': 'P664DT14H0M0S',\n                        'average': 'P332DT7H0M0S'\n                    }\n                },\n                'suspended': {\n                    'status': {\n                        'valueCodeableConcept': {\n                            'coding': [{\n                                    'system': 'http://hl7.org/fhir/care-plan-status',\n                                    'code': 'suspended'\n                                }\n                            ]\n                        }\n                    },\n                    'durationStatistics': {\n                        'count': 2,\n                        'min': 'P5DT0H0M0S',\n                        'max': 'P5DT0H0M0S',\n                        'sum': 'P10DT0H0M0S',\n                        'average': 'P5DT0H0M0S'\n                    }\n                }\n            }\n        }\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-fetch-careplans-by-patient"
        },
        "name" : "Fetch careplans by patient",
        "description" : "### Report Contents\nThis report contains the following resources:\n- EpisodeOfCare\n- PlanDefinition\n- CarePlan\n- ServiceRequest\n### Grouping \nThis report is grouped by EpisodeOfCare. Each group is returned in a separate JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- period: Filter on CarePlan.period overlap\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nAll returned objects are Fhir resources. See the implementation guide for details\n\n    {\n        'EHealthEpisodeOfCare': {\n            'resourceType': 'EpisodeOfCare',\n            'id': '30254',\n            'meta': {\n                'versionId': '1',\n                'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare']\n            },\n            'extension': [{\n                    'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization',\n                    'valueReference': {\n                        'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/88873'\n                    }\n                }\n            ],\n            'status': 'active',\n            'diagnosis': [{\n                    'condition': {\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/66740'\n                    },\n                    'rank': 1\n                }\n            ],\n            'patient': {\n                'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/18637'\n            },\n            'managingOrganization': {\n                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/16046'\n            },\n            'period': {\n                'start': '1970-01-01T01:00:01+01:00',\n                'end': '1970-01-01T01:01:40+01:00'\n            }\n        },\n        'EHealthCarePlan': [{\n                'resourceType': 'CarePlan',\n                'id': '1597',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan']\n                },\n                'definition': [{\n                        'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/59578'\n                    }\n                ],\n                'status': 'draft',\n                'intent': 'option',\n                'category': [{\n                        'coding': [{\n                                'system': 'http://ehealth.sundhed.dk/cs/careplan-category',\n                                'code': 'TBD'\n                            }\n                        ]\n                    }\n                ],\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/57779'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/30254'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                },\n                'addresses': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/74721'\n                    }\n                ],\n                'activity': [{\n                        'reference': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/76916'\n                        }\n                    }\n                ]\n            }\n        ],\n        'EHealthPlanDefinition': [{\n                'resourceType': 'PlanDefinition',\n                'id': '59578',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role',\n                        'extension': [{\n                                'url': 'reference',\n                                'valueReference': {\n                                    'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/41757'\n                                }\n                            }, {\n                                'url': 'role',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/modifier-role',\n                                            'code': 'owner'\n                                        }\n                                    ]\n                                }\n                            }\n                        ]\n                    }\n                ],\n                'version': 'c701b8e8-abe6-41bd-9db5-c05b94bc1e2b',\n                'status': 'active'\n            }\n        ],\n        'EHealthServiceRequest': [{\n                'resourceType': 'ServiceRequest',\n                'id': '76916',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy',\n                        'valueCodeableConcept': {\n                            'coding': [{\n                                    'system': 'http://ehealth.sundhed.dk/cs/measurement-sharing-policies',\n                                    'code': 'TBD'\n                                }\n                            ]\n                        }\n                    }\n                ],\n                'definition': [{\n                        'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/13593'\n                    }\n                ],\n                'status': 'completed',\n                'intent': 'filler-order',\n                'code': {\n                    'coding': [{\n                            'system': 'http://ehealth.sundhed.dk/cs/activitydefinition-code',\n                            'code': 'TBD'\n                        }\n                    ],\n                    'text': '31d136f2-0b98-4e0a-8f82-f0731b54893d'\n                },\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/49397'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/72791'\n                }\n            }\n        ]\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-fetch-careteam-stats"
        },
        "name" : "Fetch careteam stats",
        "description" : "### Report Contents\nThis report contains counts of resources associated with CareTeams:\n- EpisodeOfCare\n- CarePlan\n- Task: Count for each task category\n### Grouping \nThis report is grouped by CareTeam. Each group is returned in a separate JSon file.\n### Parameters\n- organization: Filter on CareTeam.managingOrganization match\n- period: Filter on:\n    - CarePlan.period overlap for CarePlans\n    - EpisodeOfCare.period overlap for EpisodeOfCare\n    - Task.authoredOn inside period for Tasks\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nEHealthCareTeam is a Fhir resource. See the implementation guide for details\n\n    {\n        'EHealthCareTeam': {\n            'resourceType': 'CareTeam',\n            'id': '12958',\n            'meta': {\n                'versionId': '1',\n                'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam']\n            },\n            'identifier': [{\n                    'id': '59f70e4e-1c31-4647-8c91-404939b6b14e',\n                    'system': 'urn:ietf:rfc:3986'\n                }\n            ],\n            'status': 'active',\n            'name': '0cea5c11-af39-4e5c-8733-9f532ea9961a',\n            'reasonCode': [{\n                    'coding': [{\n                            'system': 'http://ehealth.sundhed.dk/cs/conditions',\n                            'code': 'TBD'\n                        }\n                    ]\n                }\n            ],\n            'managingOrganization': [{\n                    'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/66642'\n                }\n            ]\n        },\n        'CareTeamSummary': {\n            'episodeOfCareCount': 2,\n            'carePlanCount': 6,\n            'taskCountByCategory': {\n                'MissingMeasurementResolving': 2\n            }\n        }\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-fetch-measurement-stats"
        },
        "name" : "Fetch measurement stats",
        "description" : "### Report Contents\nThis report contains counts of Measurements for each EpisodeOfCare:\n- Observation\n- QuestionnaireResponse\n- Media\n### Grouping \nThis report is grouped by EpsiodeOfCare. Each group is returned in a separate JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- period: Filter on:\n    - Observation.effective inside period for Observations\n    - Questionnaire.authored inside period for QuestionnaireResponses\n    - Media.occurence inside period for Media\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nEHealthEpisodeOfCare is a Fhir resource. See the implementation guide for details\n\n    {\n        'EHealthEpisodeOfCare': {\n            'resourceType': 'EpisodeOfCare',\n            'id': '21357',\n            'meta': {\n                'versionId': '1',\n                'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare']\n            },\n            'extension': [{\n                    'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization',\n                    'valueReference': {\n                        'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/30170'\n                    }\n                }\n            ],\n            'status': 'active',\n            'diagnosis': [{\n                    'condition': {\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/70274'\n                    },\n                    'rank': 1\n                }\n            ],\n            'patient': {\n                'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/26565'\n            },\n            'managingOrganization': {\n                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/28358'\n            },\n            'period': {\n                'start': '1970-01-01T01:00:01+01:00',\n                'end': '1970-01-01T01:01:40+01:00'\n            }\n        },\n        'EpisodeOfCareMeasurementSummary': {\n            'observationCount': 5,\n            'mediaCount': 0,\n            'questionnaireResponseCount': 0\n        }\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-fetch-patient-devices"
        },
        "name" : "Fetch patient devices",
        "description" : "### Report Contents\nThis report contains Device information for each EpisodeOfCare:\n- Device\n- DeviceUseStatement\n- DeviceMetrics\n### Grouping \nThis report is grouped by EpsiodeOfCare. Each group is returned in a separate JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- period: Filter on DeviceUseStatement.whenUsed overlap\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nAll returned objects are Fhir resources. See the implementation guide for details\n\n    {\n        'EHealthEpisodeOfCare': {\n            'resourceType': 'EpisodeOfCare',\n            'id': 'F417C17F9FDE24C9090BD629C8EE1697',\n            'meta': {\n                'versionId': '1',\n                'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare']\n            },\n            'extension': [{\n                    'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization',\n                    'valueReference': {\n                        'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/313D8B0E0AC8EA8169D1DA45ECEEACB9'\n                    }\n                }\n            ],\n            'status': 'active',\n            'diagnosis': [{\n                    'condition': {\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/9A7FCD55CA3031585A8F1690DB1D8034'\n                    },\n                    'rank': 1\n                }\n            ],\n            'patient': {\n                'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/A1D94F323D8EF09E5D913D9522FD83C4'\n            },\n            'managingOrganization': {\n                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/8DC75F2B12BCC832F92CC065C3D0B451'\n            },\n            'period': {\n                'start': '1970-01-01T01:00:01+01:00',\n                'end': '1970-01-01T01:01:40+01:00'\n            }\n        },\n        'EHealthDeviceUseStatement': [{\n                'resourceType': 'DeviceUseStatement',\n                'id': '9541E8EAEAD24376F208D5CD8A4D25F5',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context',\n                        'valueReference': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/CarePlan/23D34B29DD02EB232B6575537FE8ADC5'\n                        }\n                    }\n                ],\n                'status': 'active',\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/AC38B1F6391F256002E5A7BE69CB2586'\n                },\n                'device': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/08D51B81A7FE5B480278150A94D4048A'\n                }\n            }\n        ],\n        'EHealthDevice': [{\n                'resourceType': 'Device',\n                'id': '08D51B81A7FE5B480278150A94D4048A',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned',\n                        'valueBoolean': true\n                    }\n                ],\n                'status': 'active'\n            }\n        ],\n        'EHealthDeviceMetric': [{\n                'resourceType': 'DeviceMetric',\n                'id': '7EA21ACD27EE012439F1440574A6BB21',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 5\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 10\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 12\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 14\n                            }\n                        ]\n                    }\n                ],\n                'identifier': {\n                    'value': 'Foo'\n                },\n                'type': {\n                    'text': 'code'\n                },\n                'source': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/08D51B81A7FE5B480278150A94D4048A'\n                },\n                'category': 'calculation'\n            }\n        ]\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-fetch-patient-gdpr"
        },
        "name" : "Fetch patient GDPR",
        "description" : "### Report Contents\nThis report contains all information related to the specified Patient\n### Grouping \nNone. This report returns a single JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- period: not used.\n- patient: The patient to fetch information for.\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nAll returned objects are Fhir resources. See the implementation guide for details\n\n    {\n        'Patient': {\n            'resourceType': 'Patient',\n            'id': '70791',\n            'meta': {\n                'versionId': '1'\n            }\n        },\n        'Communication': [{\n                'resourceType': 'Communication',\n                'id': '29256',\n                'meta': {\n                    'versionId': '1'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                }\n            }\n        ],\n        'RelatedPerson': [{\n                'resourceType': 'RelatedPerson',\n                'id': '44196',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson']\n                },\n                'identifier': [{\n                        'use': 'official',\n                        'system': 'urn:oid:1.2.208.176.1.2',\n                        'value': '2412001234'\n                    }\n                ],\n                'patient': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791'\n                },\n                'name': [{\n                        'text': 'Tester'\n                    }\n                ]\n            }\n        ],\n        'Appointment': [{\n                'resourceType': 'Appointment',\n                'id': '74036',\n                'meta': {\n                    'versionId': '1'\n                },\n                'participant': [{\n                        'id': '5fda865d-5e46-4fc4-8dcc-9b5f9a6b501a',\n                        'actor': {\n                            'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791'\n                        }\n                    }\n                ]\n            }\n        ],\n        'AppointmentResponse': [{\n                'resourceType': 'AppointmentResponse',\n                'id': '63226',\n                'meta': {\n                    'versionId': '1'\n                },\n                'actor': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791'\n                }\n            }\n        ],\n        'EHealthEpisodeOfCare': [{\n                'resourceType': 'EpisodeOfCare',\n                'id': '10928',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization',\n                        'valueReference': {\n                            'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/43014'\n                        }\n                    }\n                ],\n                'status': 'active',\n                'diagnosis': [{\n                        'condition': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/33654'\n                        },\n                        'rank': 1\n                    }\n                ],\n                'patient': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791'\n                },\n                'managingOrganization': {\n                    'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/34361'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                }\n            }, {\n                'resourceType': 'EpisodeOfCare',\n                'id': '48392',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization',\n                        'valueReference': {\n                            'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/41282'\n                        }\n                    }\n                ],\n                'status': 'active',\n                'diagnosis': [{\n                        'condition': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/87020'\n                        },\n                        'rank': 1\n                    }\n                ],\n                'patient': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/47956'\n                },\n                'managingOrganization': {\n                    'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/34361'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                }\n            }\n        ],\n        'EHealthDeviceUseStatement': [{\n                'resourceType': 'DeviceUseStatement',\n                'id': '4021',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context',\n                        'valueReference': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/CarePlan/87235'\n                        }\n                    }\n                ],\n                'status': 'active',\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/69099'\n                },\n                'device': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729'\n                }\n            }, {\n                'resourceType': 'DeviceUseStatement',\n                'id': '5732',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context',\n                        'valueReference': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/CarePlan/23385'\n                        }\n                    }\n                ],\n                'status': 'active',\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/10543'\n                },\n                'device': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/91432'\n                }\n            }\n        ],\n        'EHealthDevice': [{\n                'resourceType': 'Device',\n                'id': '81729',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned',\n                        'valueBoolean': true\n                    }\n                ],\n                'status': 'active'\n            }, {\n                'resourceType': 'Device',\n                'id': '91432',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned',\n                        'valueBoolean': true\n                    }\n                ],\n                'status': 'active'\n            }\n        ],\n        'EHealthDeviceMetric': [{\n                'resourceType': 'DeviceMetric',\n                'id': '35094',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 5\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 10\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 12\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 14\n                            }\n                        ]\n                    }\n                ],\n                'identifier': {\n                    'value': 'Foo'\n                },\n                'type': {\n                    'text': 'code'\n                },\n                'source': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729'\n                },\n                'category': 'calculation'\n            }, {\n                'resourceType': 'DeviceMetric',\n                'id': '22449',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 5\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 10\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 12\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 14\n                            }\n                        ]\n                    }\n                ],\n                'identifier': {\n                    'value': 'Foo'\n                },\n                'type': {\n                    'text': 'code'\n                },\n                'source': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729'\n                },\n                'category': 'calculation'\n            }\n        ],\n        'EHealthConsent': [{\n                'resourceType': 'Consent',\n                'id': '51690',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-consent']\n                },\n                'status': 'active',\n                'category': [{\n                        'coding': [{\n                                'code': 'TBD'\n                            }\n                        ]\n                    }\n                ],\n                'patient': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                },\n                'consentingParty': [{\n                        'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/41034'\n                    }\n                ],\n                'actor': [{\n                        'id': 'f31bec27-965f-49ea-b8fe-5fdb259c539d',\n                        'role': {\n                            'coding': [{\n                                    'code': 'authserver'\n                                }\n                            ]\n                        },\n                        'reference': {\n                            'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/60499'\n                        }\n                    }\n                ],\n                'policyRule': 'Rule',\n                'data': [{\n                        'meaning': 'related',\n                        'reference': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/51427'\n                        }\n                    }\n                ]\n            }\n        ],\n        'EHealthCarePlan': [{\n                'resourceType': 'CarePlan',\n                'id': '87235',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan']\n                },\n                'definition': [{\n                        'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/98996'\n                    }\n                ],\n                'status': 'draft',\n                'intent': 'option',\n                'category': [{\n                        'coding': [{\n                                'system': 'http://ehealth.sundhed.dk/cs/careplan-category',\n                                'code': 'TBD'\n                            }\n                        ]\n                    }\n                ],\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/55953'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                },\n                'addresses': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/25664'\n                    }\n                ]\n            }, {\n                'resourceType': 'CarePlan',\n                'id': '23385',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan']\n                },\n                'definition': [{\n                        'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/83648'\n                    }\n                ],\n                'status': 'draft',\n                'intent': 'option',\n                'category': [{\n                        'coding': [{\n                                'system': 'http://ehealth.sundhed.dk/cs/careplan-category',\n                                'code': 'TBD'\n                            }\n                        ]\n                    }\n                ],\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/51258'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/48392'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                },\n                'addresses': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/4845'\n                    }\n                ]\n            }\n        ],\n        'EHealthServiceRequest': [{\n                'resourceType': 'ServiceRequest',\n                'id': '18904',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy',\n                        'valueCodeableConcept': {\n                            'coding': [{\n                                    'system': 'http://ehealth.sundhed.dk/cs/measurement-sharing-policies',\n                                    'code': 'TBD'\n                                }\n                            ]\n                        }\n                    }\n                ],\n                'definition': [{\n                        'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/64273'\n                    }\n                ],\n                'status': 'completed',\n                'intent': 'filler-order',\n                'code': {\n                    'coding': [{\n                            'system': 'http://ehealth.sundhed.dk/cs/activitydefinition-code',\n                            'code': 'TBD'\n                        }\n                    ],\n                    'text': '7654414a-7f86-4170-9920-fde60368b58b'\n                },\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/59415'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                }\n            }\n        ],\n        'EHealthCondition': [{\n                'resourceType': 'Condition',\n                'id': '22743',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-condition']\n                },\n                'clinicalStatus': 'active',\n                'code': {\n                    'coding': [{\n                            'system': 'http://ehealth.sundhed.dk/cs/conditions',\n                            'code': 'TBD'\n                        }\n                    ]\n                },\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/84730'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                }\n            }\n        ],\n        'EHealthObservation': [{\n                'resourceType': 'Observation',\n                'id': '55832',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation']\n                },\n                'basedOn': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/69506'\n                    }\n                ],\n                'status': 'amended',\n                'code': {\n                    'coding': [{\n                            'system': 'urn:oid:1.2.208.176.2.1',\n                            'code': 'NPU03011'\n                        }\n                    ]\n                },\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/96798'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                },\n                'effectivePeriod': {\n                    'start': '2020-03-26T13:37:40+01:00',\n                    'end': '2020-03-26T13:37:40+01:00'\n                },\n                'performer': [{\n                        'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/43621'\n                    }\n                ],\n                'device': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/30416'\n                }\n            }\n        ],\n        'EHealthQuestionnaireResponse': [{\n                'resourceType': 'QuestionnaireResponse',\n                'id': '21957',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaireresponse']\n                },\n                'basedOn': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/12403'\n                    }\n                ],\n                'questionnaire': {\n                    'reference': 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/42078'\n                },\n                'status': 'completed',\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/47155'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                },\n                'authored': '2020-03-26T13:37:40+01:00',\n                'source': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/61666'\n                }\n            }\n        ],\n        'EHealthMedia': [{\n                'resourceType': 'Media',\n                'id': '18256',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-media']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-quality',\n                        'extension': [{\n                                'url': 'qualityType',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/quality-types',\n                                            'code': 'TBD'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'qualityCode',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/usage-quality',\n                                            'code': 'TBD'\n                                        }\n                                    ]\n                                }\n                            }\n                        ]\n                    }\n                ],\n                'basedOn': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/98474'\n                    }\n                ],\n                'type': 'audio',\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/20886'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                },\n                'occurrenceDateTime': '2020-03-26T13:37:40+01:00',\n                'content': {\n                    'language': 'en'\n                }\n            }\n        ],\n        'EHealthClinicalImpression': [{\n                'resourceType': 'ClinicalImpression',\n                'id': '39697',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression']\n                },\n                'status': 'draft',\n                'code': {\n                    'coding': [{\n                            'system': 'http://ehealth.sundhed.dk/cs/clinicalimpression-codes',\n                            'code': 'TBD'\n                        }\n                    ]\n                },\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/32140'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                }\n            }\n        ],\n        'EHealthTask': [{\n                'resourceType': 'Task',\n                'id': '96988',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-task']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-task-category',\n                        'valueCodeableConcept': {\n                            'coding': [{\n                                    'system': 'http://ehealth.sundhed.dk/cs/task-category',\n                                    'code': 'TBD'\n                                }\n                            ]\n                        }\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-restriction-category',\n                        'valueCodeableConcept': {\n                            'coding': [{\n                                    'system': 'http://ehealth.sundhed.dk/cs/restriction-category',\n                                    'code': 'None'\n                                }\n                            ]\n                        }\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-task-responsible',\n                        'valueReference': {\n                            'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Practitioner/74334'\n                        }\n                    }\n                ],\n                'status': 'draft',\n                'intent': 'proposal',\n                'priority': 'routine',\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                }\n            }\n        ],\n        'EHealthCommunication': [{\n                'resourceType': 'Communication',\n                'id': '29256',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication']\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                }\n            }\n        ],\n        'EHealthProvenance': [{\n                'resourceType': 'Provenance',\n                'id': '68399',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-provenance']\n                },\n                'target': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                    }\n                ],\n                'recorded': '2020-03-26T13:37:39.772+01:00',\n                'policy': ['policy'],\n                'agent': [{\n                        'whoReference': {\n                            'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/6901'\n                        }\n                    }\n                ]\n            }, {\n                'resourceType': 'Provenance',\n                'id': '96195',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-provenance']\n                },\n                'target': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/48392'\n                    }\n                ],\n                'recorded': '2020-03-26T13:37:39.801+01:00',\n                'policy': ['policy'],\n                'agent': [{\n                        'whoReference': {\n                            'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/45854'\n                        }\n                    }\n                ]\n            }\n        ]\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-fetch-patient-total"
        },
        "name" : "Fetch patient total",
        "description" : "### Report Contents\nThis report contains clinical information for each Patient\n### Grouping \nThis report is grouped by EpsiodeOfCare. Each group is returned in a separate JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- period: Filter on EpisodeOfCare.period overlap\n- conditionCode: Filter on Condition.code related to EpisodeOfCare\n- status: Filter on EpisodeOfCare.status\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nAll returned objects are Fhir resources. See the implementation guide for details\n\n    {\n        'Patient': {\n            'resourceType': 'Patient',\n            'id': '70791',\n            'meta': {\n                'versionId': '1'\n            }\n        },\n        'EHealthEpisodeOfCare': [{\n                'resourceType': 'EpisodeOfCare',\n                'id': '10928',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization',\n                        'valueReference': {\n                            'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/43014'\n                        }\n                    }\n                ],\n                'status': 'active',\n                'diagnosis': [{\n                        'condition': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/33654'\n                        },\n                        'rank': 1\n                    }\n                ],\n                'patient': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791'\n                },\n                'managingOrganization': {\n                    'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/34361'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                }\n            }, {\n                'resourceType': 'EpisodeOfCare',\n                'id': '48392',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization',\n                        'valueReference': {\n                            'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/41282'\n                        }\n                    }\n                ],\n                'status': 'active',\n                'diagnosis': [{\n                        'condition': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/87020'\n                        },\n                        'rank': 1\n                    }\n                ],\n                'patient': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/47956'\n                },\n                'managingOrganization': {\n                    'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/34361'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                }\n            }\n        ],\n        'EHealthDeviceUseStatement': [{\n                'resourceType': 'DeviceUseStatement',\n                'id': '4021',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context',\n                        'valueReference': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/CarePlan/87235'\n                        }\n                    }\n                ],\n                'status': 'active',\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/69099'\n                },\n                'device': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729'\n                }\n            }, {\n                'resourceType': 'DeviceUseStatement',\n                'id': '5732',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context',\n                        'valueReference': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/CarePlan/23385'\n                        }\n                    }\n                ],\n                'status': 'active',\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/10543'\n                },\n                'device': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/91432'\n                }\n            }\n        ],\n        'EHealthDevice': [{\n                'resourceType': 'Device',\n                'id': '81729',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned',\n                        'valueBoolean': true\n                    }\n                ],\n                'status': 'active'\n            }, {\n                'resourceType': 'Device',\n                'id': '91432',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned',\n                        'valueBoolean': true\n                    }\n                ],\n                'status': 'active'\n            }\n        ],\n        'EHealthDeviceMetric': [{\n                'resourceType': 'DeviceMetric',\n                'id': '35094',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 5\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 10\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 12\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 14\n                            }\n                        ]\n                    }\n                ],\n                'identifier': {\n                    'value': 'Foo'\n                },\n                'type': {\n                    'text': 'code'\n                },\n                'source': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729'\n                },\n                'category': 'calculation'\n            }, {\n                'resourceType': 'DeviceMetric',\n                'id': '22449',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 5\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 10\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 12\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 14\n                            }\n                        ]\n                    }\n                ],\n                'identifier': {\n                    'value': 'Foo'\n                },\n                'type': {\n                    'text': 'code'\n                },\n                'source': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729'\n                },\n                'category': 'calculation'\n            }\n        ],\n        'EHealthConsent': [{\n                'resourceType': 'Consent',\n                'id': '51690',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-consent']\n                },\n                'status': 'active',\n                'category': [{\n                        'coding': [{\n                                'code': 'TBD'\n                            }\n                        ]\n                    }\n                ],\n                'patient': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                },\n                'consentingParty': [{\n                        'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/41034'\n                    }\n                ],\n                'actor': [{\n                        'id': 'f31bec27-965f-49ea-b8fe-5fdb259c539d',\n                        'role': {\n                            'coding': [{\n                                    'code': 'authserver'\n                                }\n                            ]\n                        },\n                        'reference': {\n                            'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/60499'\n                        }\n                    }\n                ],\n                'policyRule': 'Rule',\n                'data': [{\n                        'meaning': 'related',\n                        'reference': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/51427'\n                        }\n                    }\n                ]\n            }\n        ],\n        'EHealthCarePlan': [{\n                'resourceType': 'CarePlan',\n                'id': '87235',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan']\n                },\n                'definition': [{\n                        'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/98996'\n                    }\n                ],\n                'status': 'draft',\n                'intent': 'option',\n                'category': [{\n                        'coding': [{\n                                'system': 'http://ehealth.sundhed.dk/cs/careplan-category',\n                                'code': 'TBD'\n                            }\n                        ]\n                    }\n                ],\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/55953'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                },\n                'addresses': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/25664'\n                    }\n                ]\n            }, {\n                'resourceType': 'CarePlan',\n                'id': '23385',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan']\n                },\n                'definition': [{\n                        'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/83648'\n                    }\n                ],\n                'status': 'draft',\n                'intent': 'option',\n                'category': [{\n                        'coding': [{\n                                'system': 'http://ehealth.sundhed.dk/cs/careplan-category',\n                                'code': 'TBD'\n                            }\n                        ]\n                    }\n                ],\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/51258'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/48392'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                },\n                'addresses': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/4845'\n                    }\n                ]\n            }\n        ],\n        'EHealthServiceRequest': [{\n                'resourceType': 'ServiceRequest',\n                'id': '18904',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy',\n                        'valueCodeableConcept': {\n                            'coding': [{\n                                    'system': 'http://ehealth.sundhed.dk/cs/measurement-sharing-policies',\n                                    'code': 'TBD'\n                                }\n                            ]\n                        }\n                    }\n                ],\n                'definition': [{\n                        'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/64273'\n                    }\n                ],\n                'status': 'completed',\n                'intent': 'filler-order',\n                'code': {\n                    'coding': [{\n                            'system': 'http://ehealth.sundhed.dk/cs/activitydefinition-code',\n                            'code': 'TBD'\n                        }\n                    ],\n                    'text': '7654414a-7f86-4170-9920-fde60368b58b'\n                },\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/59415'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                }\n            }\n        ],\n        'EHealthCondition': [{\n                'resourceType': 'Condition',\n                'id': '22743',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-condition']\n                },\n                'clinicalStatus': 'active',\n                'code': {\n                    'coding': [{\n                            'system': 'http://ehealth.sundhed.dk/cs/conditions',\n                            'code': 'TBD'\n                        }\n                    ]\n                },\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/84730'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                }\n            }\n        ],\n        'EHealthObservation': [{\n                'resourceType': 'Observation',\n                'id': '55832',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation']\n                },\n                'basedOn': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/69506'\n                    }\n                ],\n                'status': 'amended',\n                'code': {\n                    'coding': [{\n                            'system': 'urn:oid:1.2.208.176.2.1',\n                            'code': 'NPU03011'\n                        }\n                    ]\n                },\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/96798'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                },\n                'effectivePeriod': {\n                    'start': '2020-03-26T13:37:40+01:00',\n                    'end': '2020-03-26T13:37:40+01:00'\n                },\n                'performer': [{\n                        'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/43621'\n                    }\n                ],\n                'device': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/30416'\n                }\n            }\n        ],\n        'EHealthQuestionnaireResponse': [{\n                'resourceType': 'QuestionnaireResponse',\n                'id': '21957',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaireresponse']\n                },\n                'basedOn': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/12403'\n                    }\n                ],\n                'questionnaire': {\n                    'reference': 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/42078'\n                },\n                'status': 'completed',\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/47155'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                },\n                'authored': '2020-03-26T13:37:40+01:00',\n                'source': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/61666'\n                }\n            }\n        ],\n        'EHealthMedia': [{\n                'resourceType': 'Media',\n                'id': '18256',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-media']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-quality',\n                        'extension': [{\n                                'url': 'qualityType',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/quality-types',\n                                            'code': 'TBD'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'qualityCode',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/usage-quality',\n                                            'code': 'TBD'\n                                        }\n                                    ]\n                                }\n                            }\n                        ]\n                    }\n                ],\n                'basedOn': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/98474'\n                    }\n                ],\n                'type': 'audio',\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/20886'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                },\n                'occurrenceDateTime': '2020-03-26T13:37:40+01:00',\n                'content': {\n                    'language': 'en'\n                }\n            }\n        ],\n        'EHealthClinicalImpression': [{\n                'resourceType': 'ClinicalImpression',\n                'id': '39697',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression']\n                },\n                'status': 'draft',\n                'code': {\n                    'coding': [{\n                            'system': 'http://ehealth.sundhed.dk/cs/clinicalimpression-codes',\n                            'code': 'TBD'\n                        }\n                    ]\n                },\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/32140'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                }\n            }\n        ]\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-fetch-practitioner-gdpr"
        },
        "name" : "Fetch practitioner GDPR",
        "description" : "### Report Contents\nThis report contains all information related to the specified Practitioner\n- Practitioner\n- CareTeam\n- PractitionerRole\n### Grouping \nNone. The report is returned in a single JSon file.\n### Parameters\n- organization: \n    - Practitioner: Not filtered\n    - CareTeam: Filter on CareTeam.ManagingOrganization match\n    - PractitionerRole: Filter on PractitionerRole.Organization match\n- period: not used\n- practitionerID: The practitioner to fetch information for\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nAll returned objects are Fhir resources. See the implementation guide for details\n\n    {\n        'EHealthPractitioner': {\n            'resourceType': 'Practitioner',\n            'id': '20599',\n            'meta': {\n                'versionId': '1',\n                'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner']\n            },\n            'name': [{\n                    'family': '2f82a48c-61cc-4c7f-855a-3e6b59729ef1'\n                }\n            ]\n        },\n        'EHealthPractitionerRole': [],\n        'EHealthCareTeam': [{\n                'resourceType': 'CareTeam',\n                'id': '99438',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam']\n                },\n                'identifier': [{\n                        'id': 'f556eab1-dbe9-40e3-9edd-149fa3bd1ae0',\n                        'system': 'urn:ietf:rfc:3986'\n                    }\n                ],\n                'status': 'active',\n                'name': 'f9d27974-6a6a-44fb-b6eb-bcd22d769a18',\n                'participant': [{\n                        'member': {\n                            'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Practitioner/20599'\n                        }\n                    }\n                ],\n                'reasonCode': [{\n                        'coding': [{\n                                'system': 'http://ehealth.sundhed.dk/cs/conditions',\n                                'code': 'TBD'\n                            }\n                        ]\n                    }\n                ],\n                'managingOrganization': [{\n                        'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/94174'\n                    }\n                ]\n            }\n        ]\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-fetch-practitioner-stats"
        },
        "name" : "Fetch practitioner stats",
        "description" : "### Report Contents\nThis report contains counts of practitioners associated with Organizations and CareTeams\n- List of Organization and associated practitonerCount\n- List of CareTeam and associated practitionerCount\n### Grouping \nNone. The report is returned in a single JSon file.\n### Parameters\n- organization: \n    - CareTeam: Filter on CareTeam.ManagingOrganization match\n    - PractitionerRole: Filter on PractitionerRole.Organization match\n- period\n    - CareTeam: Filter on CareTeam.participant.period overlap\n    - PractitionerRole: Filter on PractitionerRole.perid overlap\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nOrganization and CareTeam are Fhir resources. See the implementation guide for details\n\n    {\n        'PractitionerSummary': {\n            'organizationPractitionerStatistics': [{\n                    'organization': {\n                        'resourceType': 'Organization',\n                        'id': '69075',\n                        'meta': {\n                            'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization']\n                        },\n                        'extension': [{\n                                'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-source',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/organization-source',\n                                            'code': 'manual'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-synchronizationStatus',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/organization-synchronization-status',\n                                            'code': 'NotSynchronized'\n                                        }\n                                    ]\n                                }\n                            }\n                        ],\n                        'name': 'e7c2b264-b2d9-4a6d-aba9-f23be1017d39'\n                    },\n                    'practitionerCount': 1\n                }\n            ],\n            'careTeamPractitionerStatistics': [{\n                    'careTeam': {\n                        'resourceType': 'CareTeam',\n                        'id': '44267',\n                        'meta': {\n                            'versionId': '1',\n                            'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam']\n                        },\n                        'identifier': [{\n                                'id': '7ced02e2-3082-4e02-86cc-030e8df8906d',\n                                'system': 'urn:ietf:rfc:3986'\n                            }\n                        ],\n                        'status': 'active',\n                        'name': 'd1e7d427-1565-42f6-951d-5508d494d4c8',\n                        'reasonCode': [{\n                                'coding': [{\n                                        'system': 'http://ehealth.sundhed.dk/cs/conditions',\n                                        'code': 'TBD'\n                                    }\n                                ]\n                            }\n                        ],\n                        'managingOrganization': [{\n                                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/69075'\n                            }\n                        ]\n                    },\n                    'practitionerCount': 0\n                }, {\n                    'careTeam': {\n                        'resourceType': 'CareTeam',\n                        'id': '40831',\n                        'meta': {\n                            'versionId': '1',\n                            'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam']\n                        },\n                        'identifier': [{\n                                'id': 'f12b2b87-95d9-487c-b088-457acfa1693f',\n                                'system': 'urn:ietf:rfc:3986'\n                            }\n                        ],\n                        'status': 'active',\n                        'name': 'c572c5ac-bac3-4f9e-b948-795db7563145',\n                        'reasonCode': [{\n                                'coding': [{\n                                        'system': 'http://ehealth.sundhed.dk/cs/conditions',\n                                        'code': 'TBD'\n                                    }\n                                ]\n                            }\n                        ],\n                        'managingOrganization': [{\n                                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/69075'\n                            }\n                        ]\n                    },\n                    'practitionerCount': 0\n                }, {\n                    'careTeam': {\n                        'resourceType': 'CareTeam',\n                        'id': '78765',\n                        'meta': {\n                            'versionId': '1',\n                            'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam']\n                        },\n                        'identifier': [{\n                                'id': '7378e850-aff6-430d-9e86-cca801bf2375',\n                                'system': 'urn:ietf:rfc:3986'\n                            }\n                        ],\n                        'status': 'active',\n                        'name': '3e038dd3-9e80-41e4-9932-8597f8706da4',\n                        'reasonCode': [{\n                                'coding': [{\n                                        'system': 'http://ehealth.sundhed.dk/cs/conditions',\n                                        'code': 'TBD'\n                                    }\n                                ]\n                            }\n                        ],\n                        'managingOrganization': [{\n                                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/69075'\n                            }\n                        ]\n                    },\n                    'practitionerCount': 0\n                }, {\n                    'careTeam': {\n                        'resourceType': 'CareTeam',\n                        'id': '46096',\n                        'meta': {\n                            'versionId': '1',\n                            'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam']\n                        },\n                        'identifier': [{\n                                'id': '37a66140-dc7e-4ea4-9ec7-d0dd91adf7c8',\n                                'system': 'urn:ietf:rfc:3986'\n                            }\n                        ],\n                        'status': 'active',\n                        'name': '311ebab3-d310-44bb-b72b-65bdf74b3729',\n                        'reasonCode': [{\n                                'coding': [{\n                                        'system': 'http://ehealth.sundhed.dk/cs/conditions',\n                                        'code': 'TBD'\n                                    }\n                                ]\n                            }\n                        ],\n                        'managingOrganization': [{\n                                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/69075'\n                            }\n                        ]\n                    },\n                    'practitionerCount': 0\n                }, {\n                    'careTeam': {\n                        'resourceType': 'CareTeam',\n                        'id': '32543',\n                        'meta': {\n                            'versionId': '1',\n                            'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam']\n                        },\n                        'identifier': [{\n                                'id': '3671c951-d20e-4d5c-82ec-fae5ee03821e',\n                                'system': 'urn:ietf:rfc:3986'\n                            }\n                        ],\n                        'status': 'active',\n                        'name': '1f74a06c-8ae1-4b5c-b5ee-49abfd2d28e1',\n                        'reasonCode': [{\n                                'coding': [{\n                                        'system': 'http://ehealth.sundhed.dk/cs/conditions',\n                                        'code': 'TBD'\n                                    }\n                                ]\n                            }\n                        ],\n                        'managingOrganization': [{\n                                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/69075'\n                            }\n                        ]\n                    },\n                    'practitionerCount': 0\n                }\n            ]\n        }\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-fetch-questionnaireresponses"
        },
        "name" : "Fetch questionnare responses",
        "description" : "### Report Contents\nThis report contains a collection of questionnaire responses and related resources\n- Organizations\n- CareTeams\n- PlanDefinitions\n- ActivityDefinitions\n- Questionnaires\n- QuestionnaireResponses\n- Communication\n- ServiceRequestSummary\n### Grouping \nThis report is grouped by Questionnaire. Each group is returned as a FHIR bundle in a separate JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- condition: Filter on CarePlan.addresses.code match\n- period: Filter on QuestionnaireResponse.authored within period\n- plan: Filter on Plan match\n- questionnaire: Filter on ActivityDefinition.composed-of match\n- careteam: Filter on careteam in CarePlan.careteam or EpisodeOfCare.team\n- tag: Filter on tag match\n\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\n### Output\n{\n  'resourceType' : 'Bundle',\n  'id' : 'Questionnaire/44529',\n  'entry' : [ {\n    'fullUrl' : 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/24206/_history/1',\n    'resource' : {\n      'resourceType' : 'PlanDefinition',\n      'id' : '24206',\n      'meta' : {\n        'versionId' : '1',\n        'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition' ]\n      },\n      'extension' : [ {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role',\n        'extension' : [ {\n          'url' : 'reference',\n          'valueReference' : {\n            'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/14291'\n          }\n        }, {\n          'url' : 'role',\n          'valueCodeableConcept' : {\n            'coding' : [ {\n              'system' : 'http://ehealth.sundhed.dk/cs/modifier-role',\n              'code' : 'owner'\n            } ]\n          }\n        } ]\n      } ],\n      'version' : '1.0',\n      'status' : 'active',\n      'action' : [ {\n        'definitionCanonical' : 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/10919'\n      } ]\n    }\n  }, {\n    'fullUrl' : 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/10919/_history/1',\n    'resource' : {\n      'resourceType' : 'ActivityDefinition',\n      'id' : '10919',\n      'meta' : {\n        'versionId' : '1',\n        'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-activitydefinition' ]\n      },\n      'extension' : [ {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy',\n        'valueCodeableConcept' : {\n          'coding' : [ {\n            'system' : 'http://ehealth.sundhed.dk/cs/measurement-sharing-policies',\n            'code' : 'noSharing'\n          } ]\n        }\n      }, {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role',\n        'extension' : [ {\n          'url' : 'reference',\n          'valueReference' : {\n            'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/25403'\n          }\n        }, {\n          'url' : 'role',\n          'valueCodeableConcept' : {\n            'coding' : [ {\n              'system' : 'http://ehealth.sundhed.dk/cs/modifier-role',\n              'code' : 'owner'\n            } ]\n          }\n        } ]\n      } ],\n      'version' : '1.0',\n      'name' : '0ca879ed-678c-4439-aa4a-efc597f92dfb',\n      'status' : 'active',\n      'topic' : [ {\n        'coding' : [ {\n          'system' : 'http://terminology.hl7.org/CodeSystem/definition-topic',\n          'code' : 'treatment'\n        } ]\n      } ],\n      'relatedArtifact' : [ {\n        'type' : 'composed-of',\n        'resource' : 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/44529'\n      } ],\n      'code' : {\n        'coding' : [ {\n          'system' : 'http://ehealth.sundhed.dk/cs/activitydefinition-code',\n          'code' : '273586006'\n        } ]\n      }\n    }\n  }, {\n    'fullUrl' : 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/44529/_history/1',\n    'resource' : {\n      'resourceType' : 'Questionnaire',\n      'id' : '44529',\n      'meta' : {\n        'versionId' : '1',\n        'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire' ]\n      },\n      'extension' : [ {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-type',\n        'valueCodeableConcept' : {\n          'coding' : [ {\n            'system' : 'http://ehealth.sundhed.dk/cs/questionnaire-types',\n            'code' : 'QQ'\n          } ]\n        }\n      }, {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role',\n        'extension' : [ {\n          'url' : 'reference',\n          'valueReference' : {\n            'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/24153'\n          }\n        }, {\n          'url' : 'role',\n          'valueCodeableConcept' : {\n            'coding' : [ {\n              'system' : 'http://ehealth.sundhed.dk/cs/modifier-role',\n              'code' : 'owner'\n            } ]\n          }\n        } ]\n      } ],\n      'version' : '1.0',\n      'name' : '090b990e-046a-4374-b7c6-b08613a41cce',\n      'status' : 'active'\n    }\n  }, {\n    'fullUrl' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/98618/_history/1',\n    'resource' : {\n      'resourceType' : 'Organization',\n      'id' : '98618',\n      'meta' : {\n        'versionId' : '1',\n        'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization' ]\n      },\n      'extension' : [ {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-source',\n        'valueCodeableConcept' : {\n          'coding' : [ {\n            'system' : 'http://ehealth.sundhed.dk/cs/organization-source',\n            'code' : 'manual'\n          } ]\n        }\n      }, {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-synchronizationStatus',\n        'valueCodeableConcept' : {\n          'coding' : [ {\n            'system' : 'http://ehealth.sundhed.dk/cs/organization-synchronization-status',\n            'code' : 'NotSynchronized'\n          } ]\n        }\n      } ],\n      'identifier' : [ {\n        'use' : 'official',\n        'system' : 'urn:oid:2.16.840.1.113883.2.24.1.1',\n        'value' : '11111111',\n        'period' : {\n          'start' : '2023-10-10T14:49:12+02:00'\n        }\n      } ],\n      'active' : false,\n      'name' : 'defaultTestFactory-be16f47b-1f8a-4440-a02e-23da1219b0ca',\n      'partOf' : {\n        'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/22124'\n      }\n    }\n  }, {\n    'fullUrl' : 'https://organization.local.ehealth.sundhed.dk/fhir/CareTeam/87455/_history/1',\n    'resource' : {\n      'resourceType' : 'CareTeam',\n      'id' : '87455',\n      'meta' : {\n        'versionId' : '1',\n        'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam' ]\n      },\n      'identifier' : [ {\n        'system' : 'urn:ietf:rfc:3986',\n        'value' : 'urn:uuid:9658ef5f-019a-4c90-9c41-f3ad14a31777'\n      } ],\n      'status' : 'active',\n      'name' : '1b900db5-09dd-4563-b612-2b81201fab16',\n      'reasonCode' : [ {\n        'coding' : [ {\n          'system' : 'urn:oid:1.2.208.176.2.4',\n          'code' : 'DJ44'\n        } ]\n      } ]\n    }\n  }, {\n    'fullUrl' : 'https://measurement.local.ehealth.sundhed.dk/fhir/QuestionnaireResponse/92491/_history/1',\n    'resource' : {\n      'resourceType' : 'QuestionnaireResponse',\n      'id' : '92491',\n      'meta' : {\n        'versionId' : '1',\n        'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaireresponse' ]\n      },\n      'extension' : [ {\n        'url' : 'http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare',\n        'valueReference' : {\n          'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/22208'\n        }\n      }, {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-resolved-timing',\n        'extension' : [ {\n          'url' : 'serviceRequestVersionId',\n          'valueId' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439/_history/1'\n        }, {\n          'url' : 'start',\n          'valueDateTime' : '2023-10-10T14:49:12+02:00'\n        }, {\n          'url' : 'end',\n          'valueDateTime' : '2023-10-10T14:49:12+02:00'\n        }, {\n          'url' : 'type',\n          'valueCodeableConcept' : {\n            'coding' : [ {\n              'system' : 'http://ehealth.sundhed.dk/cs/resolved-timing-type',\n              'code' : 'Resolved'\n            } ]\n          }\n        } ]\n      } ],\n      'basedOn' : [ {\n        'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439'\n      } ],\n      'questionnaire' : 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/44529',\n      'status' : 'completed',\n      'subject' : {\n        'reference' : 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/64465'\n      },\n      'authored' : '2023-10-10T14:49:12+02:00',\n      'source' : {\n        'reference' : 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/75218'\n      }\n    }\n  }, {\n    'fullUrl' : 'https://patient.local.ehealth.sundhed.dk/fhir/Communication/97180/_history/1',\n    'resource' : {\n      'resourceType' : 'Communication',\n      'id' : '97180',\n      'meta' : {\n        'versionId' : '1',\n        'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication' ]\n      },\n      'extension' : [ {\n        'url' : 'http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare',\n        'valueReference' : {\n          'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/14233'\n        }\n      }, {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-restriction-category',\n        'valueCodeableConcept' : {\n          'coding' : [ {\n            'system' : 'http://ehealth.sundhed.dk/cs/restriction-category',\n            'code' : 'None'\n          } ]\n        }\n      } ],\n      'basedOn' : [ {\n        'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439'\n      } ],\n      'status' : 'in-progress',\n      'category' : [ {\n        'coding' : [ {\n          'system' : 'http://ehealth.sundhed.dk/cs/communication-category',\n          'code' : 'annotation'\n        } ]\n      }, {\n        'coding' : [ {\n          'system' : 'http://ehealth.sundhed.dk/cs/message-category',\n          'code' : 'advice'\n        } ]\n      } ],\n      'subject' : {\n        'reference' : 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/35194'\n      },\n      'topic' : {\n        'coding' : [ {\n          'system' : 'http://terminology.hl7.org/CodeSystem/communication-topic',\n          'code' : 'report-labs'\n        } ]\n      },\n      'sent' : '2023-10-10T14:49:12+02:00',\n      'reasonCode' : [ {\n        'coding' : [ {\n          'system' : 'http://ehealth.sundhed.dk/cs/message-reasonCode',\n          'code' : 'ReminderSubmitMeasurement'\n        } ]\n      } ]\n    }\n  }, {\n    'fullUrl' : 'urn:uuid:57cfd6a7-dd43-4caa-8220-d50c77aebd8b',\n    'resource' : {\n      'resourceType' : 'Parameters',\n      'parameter' : [ {\n        'name' : 'serviceRequestResponseSummary',\n        'part' : [ {\n          'name' : 'serviceRequest',\n          'valueReference' : {\n            'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439'\n          },\n          'part' : [ {\n            'name' : 'condition',\n            'valueCoding' : {\n              'system' : 'urn:oid:1.2.208.176.2.4',\n              'code' : 'DJ44',\n              'display' : 'Kronisk obstruktiv lungesygdom'\n            }\n          }, {\n            'name' : 'episodeOfCareManagingOrganization',\n            'valueReference' : {\n              'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/98618'\n            }\n          }, {\n            'name' : 'episodeOfCarePeriod',\n            'valuePeriod' : {\n              'start' : '1970-01-01T01:00:01+01:00',\n              'end' : '1970-01-01T01:01:40+01:00'\n            }\n          }, {\n            'name' : 'patientIdentifier',\n            'valueIdentifier' : {\n              'system' : 'urn:oid:1.2.208.176.1.2',\n              'value' : '0101010001'\n            }\n          }, {\n            'name' : 'statusHistory',\n            'part' : [ {\n              'name' : 'statusPeriod',\n              'part' : [ {\n                'name' : 'status',\n                'valueCoding' : {\n                  'system' : 'http://hl7.org/fhir/request-status',\n                  'code' : 'draft'\n                }\n              }, {\n                'name' : 'period',\n                'valuePeriod' : {\n                  'start' : '2023-10-02T12:49:12+00:00',\n                  'end' : '2023-10-03T12:49:12+00:00'\n                }\n              } ]\n            }, {\n              'name' : 'statusPeriod',\n              'part' : [ {\n                'name' : 'status',\n                'valueCoding' : {\n                  'system' : 'http://hl7.org/fhir/request-status',\n                  'code' : 'active'\n                }\n              }, {\n                'name' : 'period',\n                'valuePeriod' : {\n                  'start' : '2023-10-03T12:49:12+00:00',\n                  'end' : '2023-10-04T12:49:12+00:00'\n                }\n              } ]\n            }, {\n              'name' : 'statusPeriod',\n              'part' : [ {\n                'name' : 'status',\n                'valueCoding' : {\n                  'system' : 'http://hl7.org/fhir/request-status',\n                  'code' : 'on-hold'\n                }\n              }, {\n                'name' : 'period',\n                'valuePeriod' : {\n                  'start' : '2023-10-04T12:49:12+00:00',\n                  'end' : '2023-10-05T12:49:12+00:00'\n                }\n              } ]\n            }, {\n              'name' : 'statusPeriod',\n              'part' : [ {\n                'name' : 'status',\n                'valueCoding' : {\n                  'system' : 'http://hl7.org/fhir/request-status',\n                  'code' : 'active'\n                }\n              }, {\n                'name' : 'period',\n                'valuePeriod' : {\n                  'start' : '2023-10-05T12:49:12+00:00',\n                  'end' : '2023-10-08T12:49:12+00:00'\n                }\n              } ]\n            }, {\n              'name' : 'statusPeriod',\n              'part' : [ {\n                'name' : 'status',\n                'valueCoding' : {\n                  'system' : 'http://hl7.org/fhir/request-status',\n                  'code' : 'on-hold'\n                }\n              }, {\n                'name' : 'period',\n                'valuePeriod' : {\n                  'start' : '2023-10-08T12:49:12+00:00'\n                }\n              } ]\n            } ]\n          }, {\n            'name' : 'involvedCareTeams',\n            'part' : [ {\n              'name' : 'careTeam',\n              'valueReference' : {\n                'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/CareTeam/87455'\n              }\n            } ]\n          }, {\n            'name' : 'responses',\n            'part' : [ {\n              'name' : 'response',\n              'part' : [ {\n                'name' : 'occurrence',\n                'part' : [ {\n                  'name' : 'serviceRequestVersionId',\n                  'valueId' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439/_history/1'\n                }, {\n                  'name' : 'start',\n                  'valueDateTime' : '2023-10-10T14:49:12+02:00'\n                }, {\n                  'name' : 'end',\n                  'valueDateTime' : '2023-10-10T14:49:12+02:00'\n                }, {\n                  'name' : 'type',\n                  'valueCodeableConcept' : {\n                    'coding' : [ {\n                      'system' : 'http://ehealth.sundhed.dk/cs/resolved-timing-type',\n                      'code' : 'Resolved'\n                    } ]\n                  }\n                } ]\n              }, {\n                'name' : 'questionnaireResponse',\n                'valueReference' : {\n                  'reference' : 'https://measurement.local.ehealth.sundhed.dk/fhir/QuestionnaireResponse/92491'\n                }\n              }, {\n                'name' : 'submitted',\n                'valueDateTime' : '2023-10-10T12:49:12+00:00'\n              } ]\n            } ]\n          }, {\n            'name' : 'communications',\n            'part' : [ {\n              'name' : 'communication',\n              'valueReference' : {\n                'reference' : 'https://patient.local.ehealth.sundhed.dk/fhir/Communication/97180'\n              }\n            } ]\n          } ]\n        } ]\n      } ]\n    }\n  } ]\n}",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-fetch-ssl-orders"
        },
        "name" : "Fetch ssl orders",
        "description" : "### Report Contents\nThis report contains SSL Orders\n- OrderDetails\n- OrderLines\n- TraceLines\n### Grouping \nOrder. Each Order is returned in a single JSon file.\n### Parameters\n- organization: Filter on Order.buyer\n- period: Filter on TraceLine.timestamp\n- seller: Filter on Order.seller\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nAll returned objects are SSL resources. See the SSL API description for details\n\n    {\n        'OrderDetails': {\n            'order': {\n                'id': 'https://ssl-order.local.ehealth.sundhed.dk/v1/order/ORDER',\n                'threadId': null,\n                'identifiers': null,\n                'status': null,\n                'priority': null,\n                'notes': null,\n                'buyer': 'https://ssl-order.local.ehealth.sundhed.dk/v1/party/BUYER',\n                'seller': 'https://ssl-order.local.ehealth.sundhed.dk/v1/party/SELLER',\n                'sellerDeliveryContactEmail': null,\n                'carePlanRef': null,\n                'carePlanTitle': null,\n                'earliestDeliveryDate': null,\n                'latestDeliveryDate': null,\n                'receiver': null\n            },\n            'orderLines': [{\n                    'id': 'https://ssl-order.local.ehealth.sundhed.dk/v1/order-line/ORDERLINE',\n                    'order': 'https://ssl-order.local.ehealth.sundhed.dk/v1/order/ORDER',\n                    'status': null,\n                    'item': null,\n                    'agreedDate': null,\n                    'device': null\n                }\n            ],\n            'traceLines': [{\n                    'id': 'https://ssl-order.local.ehealth.sundhed.dk/v1/order/ORDER/1',\n                    'timestamp': '2019-12-24T18:00:00Z',\n                    'createdByOrganization': null,\n                    'createdByUser': null,\n                    'text': null,\n                    'supplementaryText': null,\n                    'order': 'https://ssl-order.local.ehealth.sundhed.dk/v1/order/ORDER',\n                    'orderLine': null,\n                    'statusChange': null\n                }\n            ]\n        }\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-fetch-patient-usage-stats"
        },
        "name" : "Fetch unique active citizens total",
        "description" : "### Report Contents\nThis report contains an overview of the number of unique active citizens with Episodes of Care, shown both on monthly and yearly basis.\n### Grouping \nThis report is grouped by months and years. All groups are contained in the same JSON file.\n### Parameters\n- None\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing a JSon file corresponding to the report groups.\n### Example output\nAll returned objects are Fhir resources. See the implementation guide for details\nFirst example is the monthly data:\n\n{\n\t'PatientsUsageSummary': {\n\t\t'monthData': [\n\t\t\t{\n\t\t\t\t'month': '1',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '2',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '3',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '4',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '5',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '6',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '7',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '8',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '9',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '10',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '11',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '12',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t}\n      ]\n   }\n}\n\nSecond example is the yearly data:\n\n{\n\t'PatientsUsageSummary': {\n\t\t'yearData': [\n\t\t\t{\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 12,\n\t\t\t\t\t\t'average': 1.0,\n\t\t\t\t\t\t'usageBaseline': 10000,\n\t\t\t\t\t\t'averageRounded': 1000.0,\n\t\t\t\t\t\t'averageBeyondBaseline': 0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 12,\n\t\t\t\t\t\t'average': 1.0,\n\t\t\t\t\t\t'usageBaseline': 10000,\n\t\t\t\t\t\t'averageRounded': 1000.0,\n\t\t\t\t\t\t'averageBeyondBaseline': 0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t}\n      ]\n   }\n}",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-format-codes"
        },
        "name" : "FormatCodes",
        "description" : "Format Codes value set.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/fs3-health-musculoskeletal"
        },
        "name" : "FS III, Bevægeapparat",
        "description" : "FS III, Bevægeapparat",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/fs3-citizen-importance-scores"
        },
        "name" : "FS III, borgerens vurdering af betydning",
        "description" : "FS III, borgerens vurdering af betydning",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/fs3-citizen-performance-scores"
        },
        "name" : "FS III, borgerens vurdering af udførelse",
        "description" : "FS III, borgerens vurdering af udførelse",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/fs3-group-selfcare"
        },
        "name" : "FS III, Egenomsorg",
        "description" : "FS III, Egenomsorg",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/fs3-health-nutrition"
        },
        "name" : "FS III, Ernæring",
        "description" : "FS III, Ernæring",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/fs3-health-function-level"
        },
        "name" : "FS III, Funktionsniveau",
        "description" : "FS III, Funktionsniveau",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/fs3-health"
        },
        "name" : "FS III, helbredstilstande",
        "description" : "FS III, helbredstilstande",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/fs3-health-skin-and-mucous-membranes"
        },
        "name" : "FS III, Hud og slimhinder",
        "description" : "FS III, Hud og slimhinder",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/fs3-health-communication"
        },
        "name" : "FS III, Kommunikation",
        "description" : "FS III, Kommunikation",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/fs3-group-mentalfunctions"
        },
        "name" : "FS III, Mentale funktioner",
        "description" : "FS III, Mentale funktioner",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/fs3-group-mobility"
        },
        "name" : "FS III, Mobilitet",
        "description" : "FS III, Mobilitet",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/fs3-scores"
        },
        "name" : "FS III, niveauer",
        "description" : "FS III, niveauer",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/fs3-group-practicaltasks"
        },
        "name" : "FS III, Praktiske opgaver",
        "description" : "FS III, Praktiske opgaver",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/fs3-health-psychosocial-conditions"
        },
        "name" : "FS III, Psykosociale forhold",
        "description" : "FS III, Psykosociale forhold",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/fs3-health-respiration-and-circulation"
        },
        "name" : "FS III, Respiration og cirkulation",
        "description" : "FS III, Respiration og cirkulation",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/fs3-group-communitylife"
        },
        "name" : "FS III, Samfundsliv",
        "description" : "FS III, Samfundsliv",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/fs3-health-sexuality"
        },
        "name" : "FS III, Seksualitet",
        "description" : "FS III, Seksualitet",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/fs3-health-pain-and-sensory-impressions"
        },
        "name" : "FS III, Smerter og sanseindtryk",
        "description" : "FS III, Smerter og sanseindtryk",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/fs3-health-sleep-and-rest"
        },
        "name" : "FS III, Søvn og hvile",
        "description" : "FS III, Søvn og hvile",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/fs3-health-excretion-of-waste-materials"
        },
        "name" : "FS III, Udskillelse af affaldsstoffer",
        "description" : "FS III, Udskillelse af affaldsstoffer",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/fs3-health-knowledge-and-development"
        },
        "name" : "FS III, Viden og udvikling",
        "description" : "FS III, Viden og udvikling",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/kl.dk-fhir-common-caresocial-CodeSystem-FSIII"
        },
        "name" : "FSIII",
        "description" : "Codes from FSIII",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-general-health-condition"
        },
        "name" : "General health condition",
        "description" : "Describes the general health condition of a patient using FSIII concepts (see http://www.fs3.nu/filer/Dokumenter/Metode/FSIII-Guide-til-helbredstilstande.pdf)",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/Media-t-get-data"
        },
        "name" : "Get media data",
        "description" : "The get-data operation returns a media content matching the uuid provided.\n\n\n### Parameter description\n- uuid: The uuid of the media to return\n\n\n### Request header description\n- ehealth-thumbnail-size: The size of thumbnail to return instead of original content. If thumbnails are not supported for the media, the original content is returned\n\n\n### Output description\nThe result of this operation returns a Binary containing the media found from the provided uuid",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/Organization-t-get-general-practitioner-info"
        },
        "name" : "Get organization information for a healthcare provider with provider number",
        "description" : "The operation resolves the input organization(s) to the shared organization for the one or more organizations that have the given provider number. \nThe Organization returned depends on how many active Organization exist in the service with that provider number. When a single Organization has the provider number that Organization is returned. \nWhen multiple Organization resources have the same provider number, the shared parent Organization is returned. \nAn OperationOutcome with an explicit error is returned in case multiple organizations share the provider number but do not have a shared parent, or in case input organizations have different provider numbers. \nA typical use of the operation is to get name, address and telecom details for a general practitioner. Many provider numbers are assigned to a single organization but some provider numbers are shared by multiple entities (organizations) within in a common practice.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-get-patient-procedures"
        },
        "name" : "Get patient procedures",
        "description" : "This operation returns an overview of patient activities within a time period and filtered by either EpisodeOfCare or Condition code(s). On success, the returned Bundle contains a Parameters structure detailing the count of measurements received and expected. This is done per ServiceRequest with status active for those part of a CarePlan with status active related to eligible EpisodeOfCare resources. Eligible EpisodeOfCare are those with status active that refer to the given Patient and are either given as EpisodeOfCare reference in input or are referencing a Condition with a condition code that matches at least one of the Condition codes possibly given as input. The measurement regime expressed in ServiceRequest.occurrence[x] is, when possible, resolved to time slot(s) corresponding to datetime/period where an action is supposed to take place, typically performed by the Patient. When the occurrenceTiming variant is used, resolved time slots overlapping with the input time periode are considered. For occurrenceTiming expression which are either adhoc or unresolved, the effective datetime/period of a measurement is considered when checked for overlap with input time period.\r\n## Input\r\nThe operation has three mandatory inputs, a Patient reference, a start date and an end date. Additionally the operation has three optional inputs: a list of reference(s) to EpisodeOfCare, a list of Codings for Condition and a list of Codings for tags.\r\n### Patient reference\r\nMandatory reference for the Patient which the procedure overview is computed for.\r\n### Start and end datetimes\r\nStart and end datetime are both mandatory, and together specify the period of interest in the patient procedure overview. As stated above, for resolvable past and future time slots as well as adhoc and unresolved timings there must overlap with this period.\r\n### EpisodeOfCare list\r\nThe list of EpisodeOfCare references is optional. If EpisodeOfCare are provided, these will be used to further filter which active EpisodeOfCare, CarePlan and ServiceRequest are considered for the patient procedure overview.\r\n### Condition Coding list\r\nThe list of Coding for Condition is optional. If Condition Coding are provided, the EpisodeOfCare considered are those referring to a Condition matching at least one of the codes in the list. As above, the EpisodeOfCare (one or more) considered further determines which active EpisodeOfCare, CarePlan and ServiceRequest are considered.\r\n### Tag Coding list\r\nThe list of Coding for tags is optional. If tag Coding are provided, the EpisodeOfCare considered are those including a tag matching at least one of the codes in the list. As above, both the Condition (one or more) and EpisodeOfCare (one or more) considered further determines which active EpisodeOfCare, CarePlan and ServiceRequest are considered.\r\n### Extra boolean\r\nThis is an optional parameter that can be set to true if activities allowing 'Extra' submissions should be included in the response. Whether the ServiceRequest is included when Extra paremeter is set to true, is based on the ServiceRequest.includeAsExtra field.\r\n## Output\r\nFor valid inputs, the server will compute and return a Bundle. The Bundle contains a Parameters resource with resolved measurement regimes and associated counts of measurement submitted and counts expected. Such counts are also included in the Parameters structure when the measurement regime is either adhoc or unresolved. In addition, the Bundle contains CarePlan and ServiceRequest referenced in the Parameters. The Bundle can contain an OperationOutcome describing any encountered warnings.\r\n### Output Parameters\r\nThe output contains rows (encoded in parameters) for each matching and active ServiceRequest with resolved timings overlapping with the requested period. \r\n\r\nRows are represented as Parameters.parameter with names: item_1, item_2, etc. Columns are represented as Parameters.parameter.part with name and value \r\n```\r\nExample:\r\n'resource': {\r\n    'resourceType': 'Parameters',\r\n    'parameter': [{\r\n            'name': 'item_1',\r\n            'part': [{\r\n                    'name': 'CarePlan',\r\n                    'valueReference': {\r\n                        'reference': 'https://careplan.devtest.systematic-ehealth.com/fhir/CarePlan/164581'\r\n                    }\r\n            }]\r\n    }]\r\n}\r\n ```\r\n\r\n### Columns\r\n\r\n- CarePlan: Reference to the CarePlan that the ServiceRequest belongs to.\r\n- ServiceRequest: Reference to the ServiceRequest.\r\n- ServiceRequestVersionId: The version of the ServiceRequest (version specified at time of submit-measurement or the current version (for expected activities)).\r\n- Activity: Description of the planned activity.\r\n- ResolvedTimingStart: A planned start time for the activity in the requested period.\r\n- ResolvedTimingEnd: A planned end time for the activity in the requested period. May be identical to start if no duration is specified in the measurement regime.\r\n- TotalSubmitted: The number of measurements already submitted for this ServiceRequest and resolved timing.\r\n- SubmittedTimely: The number of measurements where the measurement time matches the resolved timing.\r\n- TimingType:\r\n    * Resolved: a measurement regime that is supported by the infrastructure and where resolved timing and requested number of measurements can be calculated.\r\n    * Unresolved: a measurement regime that is not supported by the infrastructure. Resolved Timing Start, end, submitted timely and Occurrences requested will be empty.\r\n    * Adhoc: A ServiceRequest without a measurement regime or a measurement regime stating ad-hoc.\r\n    * Extra: The service request may be performed outside the resolved timing.\r\n- OccurrencesRequested: Expected number of measurements.\r\n- TotalInvalidated: Number of measurements which are invalidated.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-get-report-job-status"
        },
        "name" : "Get Report Job Status",
        "description" : "### Status Contents \nThis operation returns status for reports scheduled by the user (by schedule or execute)\n### Output\nThe output is a Bundle containing Parameters resources for each scheduled report.\nThe parts of the Parameters describe the class of report, the parameters that the report\nwas scheduled with, the user ID, the status of the report, a reference to the report Binary\nand time of creation, start, and end of execution.\n### Example output\n{\n  'resourceType': 'Bundle',\n  'type': 'collection',\n  'entry': [\n    {\n      'fullUrl': 'ce35bcd5-4bb2-4c6e-b230-5347df1fe9bc',\n      'resource': {\n        'resourceType': 'Parameters',\n        'id': 'ce35bcd5-4bb2-4c6e-b230-5347df1fe9bc',\n        'parameter': [\n          {\n            'name': 'reportJob',\n            'part': [\n              {\n                'name': 'reportClass',\n                'valueString': 'com.systematic.ehealth.reporting.reports.PatientsUsageReport'\n              },\n              {\n                'name': 'userId',\n                'valueString': '0aaca7cd-67c3-48dd-a8c4-0cceecb5d276'\n              },\n              {\n                'name': 'status',\n                'valueString': 'DONE'\n              },\n              {\n                'name': 'binary',\n                'valueReference': {\n                  'reference': 'https://reporting.local.ehealth.sundhed.dk/fhir/Binary/7'\n                }\n              },\n              {\n                'name': 'parameters',\n                'resource': {\n                  'resourceType': 'Parameters',\n                  'parameter': [\n                    {\n                      'name': 'anonymization',\n                      'valueString': 'None'\n                    }\n                  ]\n                }\n              },\n              {\n                'name': 'created',\n                'valueDateTime': '2023-10-12T09:51:50+00:00'\n              },\n              {\n                'name': 'started',\n                'valueDateTime': '2023-10-12T09:51:50+00:00'\n              },\n              {\n                'name': 'ended',\n                'valueDateTime': '2023-10-12T09:51:51+00:00'\n              }\n            ]\n          }\n        ]\n      }\n    }\n  ]\n}",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-goal-description"
        },
        "name" : "Goal Description",
        "description" : "Goal Description",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-goal-description"
        },
        "name" : "Goal Description",
        "description" : "Value set for goal description.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/goal-target-measure"
        },
        "name" : "Goal Target Measure",
        "description" : "Value set for goal target measure.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-group-id"
        },
        "name" : "Group id",
        "description" : "A logical id identifying a set of messages, which have the same recipient (considered a 'group message'). Must be supplied by the client, eg. as a UUID",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Appointment"
          }
        ],
        "reference" : {
          "reference" : "Appointment/group-appointment01"
        },
        "name" : "group-appointment01",
        "description" : "Forundersøgelse",
        "exampleCanonical" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-group-appointment"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Appointment"
          }
        ],
        "reference" : {
          "reference" : "Appointment/group-videoappointment01"
        },
        "name" : "group-videoappointment01",
        "description" : "Forundersøgelse",
        "exampleCanonical" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-group-videoappointment"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-guest-pin-code"
        },
        "name" : "Guest PIN code",
        "description" : "The PIN code to be used to gain access to a video meeting. Is provided by the service, not the client, and is not updateable.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-host-pin-code"
        },
        "name" : "Guest PIN code",
        "description" : "The PIN code to be used to gain access to a video meeting. Is provided by the service, not the client, and is not updateable. Host PIN must be used in order to start the meeting",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-questionnaire-helpText"
        },
        "name" : "Help text",
        "description" : "Help text for questions. xhtml contains an equivalent of the text string, but includes additional XHTML markup, such as bold, italics, styles, tables, etc. Existing restrictions on XHTML content apply. Note that using markdown allows for greater flexibility of display.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/hl7TermMaintInfra"
        },
        "name" : "HL7 Terminology Maintenance Infrastructure Vocabulary",
        "description" : "Codes that may have been strings or other types of data in pre-existing tooling for V3 and V2 terminology maintenance, and moved to codes in this code system for proper handling in the FHIR based UTG maintenance facilities.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-import"
        },
        "name" : "import",
        "description" : "Import terminology resources",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/PlanDefinition-t-import"
        },
        "name" : "Import a Plandefinition",
        "description" : "Import a Plandefinition\n### Parameters\n- planDefinitionPackage: Binary package produced by the export operation\n### Output\nBundle containing the created resources. PlanDefinitions, ActivityDefinitions, and Questionnaires will be created. Imports QFFD DocumentReference into Document-Transformation service.Libraries and Organizations are used to find the corresponding resources on the target system.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-import-organizations"
        },
        "name" : "Import organizations",
        "description" : "Import a bundle containing at least one organization tree.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-include-as-extra"
        },
        "name" : "includeAsExtra",
        "description" : "Used to mark that the action/service request may be performed as extra, meaning the action/service request may also be performed outside the resolved timing slots.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/percentage-codes"
        },
        "name" : "Integer percentage codes",
        "description" : "Integer percentage codes 0-100",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-intendedAudience"
        },
        "name" : "Intended audience",
        "description" : "Specifies that the resource is only intended for use in the specified organisations. Leave blank if the resource is intended for global use.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-intendedOrganization"
        },
        "name" : "Intended organization",
        "description" : "The resource is intended to be used by these organizations.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "SearchParameter"
          }
        ],
        "reference" : {
          "reference" : "SearchParameter/ehealth-appointment-search-intended-audience"
        },
        "name" : "intended-audience",
        "description" : "Search parameter for finding intended audience on Appointment",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/patient-interpreterRequired"
        },
        "name" : "Interpreter required",
        "description" : "This extension describes the IT skills/competence of a patient. The IT competence may optionally be related to a specific device type, and may be assessed using a score (either a FS3 score or a percentage), or as a free text description.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/ClinicalImpression-t-set-measurement-validity"
        },
        "name" : "Invalidate / Retract Invalidation of a Measurement",
        "description" : "This operation is used to invalidate or retract an invalidation of a Measurement.\r\n## Input\r\nThe input parameter is a ClinicalImpression resource with the following values:\r\n- `status` - The status of the ClinicalImpression must be `completed`.\r\n- `investigation.item` - Versioned reference to the Measurement that is to be invalidated or retracted.\r\n- `investigation.item` - Unversioned reference to the Measurement that is to be invalidated or retracted.\r\n- `subject` - Reference to the Patient .\r\n- `episodeOfCare` - Reference to the EpisodeOfCare that the Measurement is part of.\r\n- `code` - Should use `MeasurementAssessment` from `http://ehealth.sundhed.dk/cs/clinicalimpression-codes`.\r\n- `finding.code` - The finding code must be `measurement-invalidated` or `measurement-invalidation-retracted`.\r\n- `decision` - The decision code is required if `finding.code` is `measurement-invalidated`. The decision code must be `invalidated-fulfills` or `invalidated-is-not-fulfillment`.\r\n## Output\r\nThe operation returns the persisted ClinicalImpression:\r\n- `clinicalImpression` - The persisted ClinicalImpression resource with updated assessor values.\r\n## Operation side effects\r\n- The operation will update the status of the Measurement that is being invalidated or has the invalidation retracted to `entered-in-error` or `completed` respectively.\r\n- The operation will update the status to `entered-in-error` for any previous invalidation or invalidation retraction ClinicalImpression for the referenced Measurement, indicating that the previous ClinicalImpression is no longer used to represent the validity of the Measurement. The operation performs a search for any existing ClinicalImpression in the measurement validity cycle, and does not rely on/update the `previous` field on the input ClinicalImpression. If the input ClinicalImpression is for invalidation retraction, there must exist a ClinicalImpression invalidating the Measurement.\r\n- The operation will add an additional investigation with the code `item-modified`, referencing the Measurement version after the patch has been applied.\r\n- The operation will set assessor values (assessor, assessorOrganization and assessorOther). If the user is of type PRACTITIONER, assessor and assessorOrganization will be set. If the user is of type PATIENT, assessorOther will be set`.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/EpisodeOfCare-i-is-context-allowed"
        },
        "name" : "Is context allowed",
        "description" : "Checks that it is allowed to set an EpisodeOfCare as context.\r\nIf the user requesting context is a patient, then the patient input parameter should be specified.\r\nIf the user requesting context is a practitioner, then the careTeam input parameter should be specified.\r\nThrows an exception if it is not allowed to select the Episode Of Care context.\r\n## Output\r\nFor valid Episode of Care is returned references that cause the Episode of Care to be valid context. \r\nFor a practitioner, two output parameters will be returned on success:\r\n- CareTeam: The Careteam that gave access\r\n- EpisodeOfCare/CarePlan: The EpisodeOfCare or CarePlan that referenced the CareTeam",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-itcompetencelevel"
        },
        "name" : "IT competence level",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/competence-percentage-codes"
        },
        "name" : "IT Competence Level codes",
        "description" : "The set of possible message types",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-jurisdiction"
        },
        "name" : "Jurisdiction",
        "description" : "Jurisdiction",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-jurisdiction"
        },
        "name" : "Jurisdiction",
        "description" : "Jurisdiction value set",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/kl.dk-fhir-common-caresocial-ValueSet-KLConditionCodesNursing"
        },
        "name" : "KLTilstandeKoderSygepleje",
        "description" : "Danish municipality nursing condition codes",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-legalBasis"
        },
        "name" : "Legal basis",
        "description" : "Legal basis",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CapabilityStatement"
          }
        ],
        "reference" : {
          "reference" : "CapabilityStatement/library"
        },
        "name" : "library",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-library-type"
        },
        "name" : "Library Type",
        "description" : "Library Type",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-library-type"
        },
        "name" : "Library Type",
        "description" : "http://terminology.hl7.org/CodeSystem/library-type + automated-processing",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth.sundhed.dk-loinc.org-supplement"
        },
        "name" : "LOINC Code System Supplement",
        "description" : "LOINC is a freely available international standard for tests, measurements, and observations",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/material-assignment-participant-function"
        },
        "name" : "Material Assignment Participant Function",
        "description" : "The function of the participant in material assignment (performer).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-material-category"
        },
        "name" : "Material Category",
        "description" : "Material Category",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-material-communication-category"
        },
        "name" : "Material Communication Category",
        "description" : "The set of possible material-communication categories",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/material-registration-participant-function"
        },
        "name" : "Material Registration Participant Function",
        "description" : "The function of the participant in material registration (author / editor).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/material-communication-category"
        },
        "name" : "MaterialCommunicationCategory",
        "description" : "The set of possible material-communication categories",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-max-participants"
        },
        "name" : "Max participants",
        "description" : "The maximum number of participants allowed to participate in a video meeting",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CapabilityStatement"
          }
        ],
        "reference" : {
          "reference" : "CapabilityStatement/measurement"
        },
        "name" : "measurement",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-measurement-sharing-policies"
        },
        "name" : "Measurement Sharing Policies",
        "description" : "Measurement sharing policies",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-measurement-sharing-policies"
        },
        "name" : "Measurement Sharing Policies",
        "description" : "Policies of sharing submissions with national registers such as KIH.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/urn-oid-1.2.208.184.100.8"
        },
        "name" : "MedCom Measurement CodeSystem",
        "description" : "Complete MedCom Measurement CodeSystem (MCS)",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/urn-oid-1.2.208.184.100.1"
        },
        "name" : "MedCom Message Codes",
        "description" : "MedCom Message Codes.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/phmr-observation-vs"
        },
        "name" : "MedCom PHMR Observation ValueSet",
        "description" : "Value set used for Danish (DK) HL7 CDA profile PHMR-DK observation codes.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-media-codes"
        },
        "name" : "Media Codes",
        "description" : "Media codes value set",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-clinicalimpression-mediaInvestigationItem"
        },
        "name" : "Media investigation item",
        "description" : "Investigation item for Media resources so they can be approved.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-media-modality"
        },
        "name" : "Media modality",
        "description" : "Media modality",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-media-thumbnail"
        },
        "name" : "Media Thumbnail representation",
        "description" : "A downsampled version of a Media resource content.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-media-usage-mode"
        },
        "name" : "Media usage mode",
        "description" : "Identifies the what the media resource is used for.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-media-usage-mode"
        },
        "name" : "Media Usage Mode",
        "description" : "Media Usage Mode",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-media-view"
        },
        "name" : "Media view",
        "description" : "Media view",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-meeting-url"
        },
        "name" : "Meeting URL",
        "description" : "The URL at which a video meeting will take place. Is provided by the service, not the client, and may not be updated",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-message-category"
        },
        "name" : "Message Category",
        "description" : "Message category types",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-message-medium"
        },
        "name" : "Message Medium",
        "description" : "Message medium types",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-message-reasonCode"
        },
        "name" : "Message ReasonCode",
        "description" : "Message ReasonCode",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Communication"
          }
        ],
        "reference" : {
          "reference" : "Communication/message01"
        },
        "name" : "message01",
        "exampleCanonical" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-message"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/message-category"
        },
        "name" : "MessageCategory",
        "description" : "The set of possible message types",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/message-medium"
        },
        "name" : "MessageMedium",
        "description" : "The set of possible message types",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-modifier-role"
        },
        "name" : "Modified role",
        "description" : "This is a modifier role that can hold a role and a reference to the item who has the role. Ex. owner + a reference to the owner organization.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-modifier-role"
        },
        "name" : "Modifier Role",
        "description" : "Modifier Role",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-modifier-role"
        },
        "name" : "Modifier Role",
        "description" : "Value set of plan definition modifier role codes.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/CarePlanEpisodeOfCare-i-update-care-teams"
        },
        "name" : "Modify care team assignment",
        "description" : "The operation modifies the care team assignment of the care plan and all of its sub plans.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-organization-municipalityCode"
        },
        "name" : "Municipality Code",
        "description" : "The organization's municipality code in the Danish 'Det Centrale Personregister'",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-nameandaddressprotection"
        },
        "name" : "Name and address protection",
        "description" : "Period of name and address protection. Patients with name and address protection are marked with security label ‘restricted’ (R in http://hl7.org/fhir/v3/Confidentiality).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/1.2.208.176.2.1--20190829"
        },
        "name" : "NPU DK",
        "description" : "It is the translation into Danish of the International NPU Terminology. The NPU terminology defines types of clinical laboratory results expressed as patient properties, with measurement units where relevant, and with individual identifiers. The NPU terminology is owned by: the International Union of Pure and Applied Chemistry (IUPAC) and the International Federation of Clinical Chemistry and laboratory medicine (IFCC). The Danish Health Data Authority (see OID {iso(1) member-body(2) dk(208) nsi(176)}) serves as the international repository for the international version. Child OIDs may be registered by the Danish Health Data Authority on decision by the NPU Terminology Steering Committee. OIDs for the national versions are registered by the National Release Centers.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/conceptmap-obs-code-to-ucum"
        },
        "name" : "Observation code to UCUM mapping",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-observation-codes"
        },
        "name" : "Observation Codes",
        "description" : "Observation codes value set.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-observation-method"
        },
        "name" : "Observation method",
        "description" : "The method of acquiring the value of an observation.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-observation-method"
        },
        "name" : "Observation Method",
        "description" : "Identifies how an observation is acquired.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-observation-method"
        },
        "name" : "Observation Method",
        "description" : "Identifies how an observation is acquired.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-oio-bpp-roles"
        },
        "name" : "OIO BPP Roles",
        "description" : "OIO BPP roles.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/oio-bpp-roles-to-careteam-participant-roles"
        },
        "name" : "OIO BPP roles to eHealth CareTeam participant role mapping",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-oio-organization-type"
        },
        "name" : "OIO Organization Type",
        "description" : "Organization types specific for organizations from OIO / STS-ORG",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-oio-organization-type"
        },
        "name" : "OIO Organization Type",
        "description" : "Value set used for indicating the organization type for organizations from OIO / STS-ORG",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-oio-bpp-roles"
        },
        "name" : "OIO-BPP Role",
        "description" : "OIO BPP Role",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-on-behalf-of"
        },
        "name" : "On behalf of",
        "description" : "On behalf of",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "SearchParameter"
          }
        ],
        "reference" : {
          "reference" : "SearchParameter/ehealth-communication-search-on-behalf-of"
        },
        "name" : "on-behalf-of",
        "description" : "Search parameter for finding communication based on on-behalf-of",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CapabilityStatement"
          }
        ],
        "reference" : {
          "reference" : "CapabilityStatement/organization"
        },
        "name" : "organization",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-organization-relation-type"
        },
        "name" : "Organization Relation Type",
        "description" : "Organization Relation Type",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-organization-relation-type"
        },
        "name" : "Organization Relation Type",
        "description" : "How Organizations are related.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-organization-source"
        },
        "name" : "Organization Source",
        "description" : "The source of the organization",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-organization-source"
        },
        "name" : "Organization Source",
        "description" : "Organization source type",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-organization-source"
        },
        "name" : "Organization Source",
        "description" : "Value set used for indicating the organization source",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-organization-specialty"
        },
        "name" : "Organization specialty",
        "description" : "The specialty of the organization",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-organization-specialty"
        },
        "name" : "Organization Specialty",
        "description" : "Value set used for indicating the specialty for organizations.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-organization-synchronizationStatus"
        },
        "name" : "Organization Synchronization status",
        "description" : "The synchronization status of the organization",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-organization-synchronization-status"
        },
        "name" : "Organization Synchronization Status",
        "description" : "Organization synchronization status type",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-organization-synchronization-status"
        },
        "name" : "Organization Synchronization Status",
        "description" : "Value set used for indicating the organization synchronization status",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-organization-type"
        },
        "name" : "Organization Type",
        "description" : "Value set used for indicating the organization type",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/108752"
        },
        "name" : "Organization/108752",
        "exampleCanonical" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/8564"
        },
        "name" : "Organization/8564",
        "exampleCanonical" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-overviewUsageMode"
        },
        "name" : "Overview usage mode",
        "description" : "Identifies whether the specified element and/or results of the element should appear in overview or table presentation.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-overviewUsageMode"
        },
        "name" : "Overview usage mode",
        "description" : "Identifies whether the specified element and/or results of the element should appear in overview or table presentation.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-overviewUsageMode"
        },
        "name" : "Overview Usage Mode",
        "description" : "Whether the element should appear in overview modes of operation.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-participant"
        },
        "name" : "Participant",
        "description" : "The participating CareTeam or Practitioner.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/participant-function"
        },
        "name" : "Participant Function",
        "description" : "Participant Function.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/participant-function"
        },
        "name" : "Participant Function",
        "description" : "The function of the participant (primay / secondary contact).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CapabilityStatement"
          }
        ],
        "reference" : {
          "reference" : "CapabilityStatement/patient"
        },
        "name" : "patient",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-patient-contactnote"
        },
        "name" : "Patient contact note",
        "description" : "This note holds the information of when the patient is available for communication - eg. between 10 and 12 every monday",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/102"
        },
        "name" : "Patient/102",
        "exampleCanonical" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "SearchParameter"
          }
        ],
        "reference" : {
          "reference" : "SearchParameter/ehealth-patient-search-cpridentifier"
        },
        "name" : "patientCPRIdentifier",
        "description" : "Search parameter for Patient DK-Core CPR identifier",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "SearchParameter"
          }
        ],
        "reference" : {
          "reference" : "SearchParameter/ehealth-patient-search-cpridentifier-unique"
        },
        "name" : "patientCPRIdentifierUnique",
        "description" : "Uniqueness constraint on search parameter patientCPRIdentifier",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-performer"
        },
        "name" : "Performer",
        "description" : "The actual performer in an appointment, eg. teacher in a group class",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-performing-organization"
        },
        "name" : "Performing organization",
        "description" : "Organization who is performing in the given context",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-period"
        },
        "name" : "Period",
        "description" : "Specifies the temporal validity of an ehealth/message instance. Contains a period, eg. specifying temporal validity",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "SearchParameter"
          }
        ],
        "reference" : {
          "reference" : "SearchParameter/ehealth-communication-search-period"
        },
        "name" : "period",
        "description" : "Search parameter for finding communication based on period",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-persist-login"
        },
        "name" : "Persist login",
        "description" : "This operation persists login information into CareTeams and PractitionerRoles\nThe following elements of each careteam are mandatory:\n- id: Reference based on the careteam from the saml security token\n- status: any\n- name: any\n- reasonCode: any\n- participant: 1 for each careteam-role in the saml security token\n-- role: from the saml security token\n-- member: reference to the practitioner\n-- onBehalfOf: reference to organization (cannot be set currently because of a bug in hapi)\n\nPersist-login will find each careteam, and update it with any new participants and roles from the input bundle.\nThe input careteam resources are are used as a container for the participant list. The rest of the fields are not used.\nThe following elements of each PractitionerRole are mandatory:\n- practitioner\n- organization\n- code: roles from the saml security token (CareteamParticipantRole valueset)\n\nPersist-login will search for practitionerRoles for each combination of (practitioner, organization) and create it if it doesn't already exists.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/ehealth-person-match"
        },
        "name" : "Person name lookup",
        "description" : "This operation is used to lookup a citizen. It first attempts lookup on the service and, if a match is found, returns a Person resource with name, identifier, deceased-status and a link to the Patient resource. If not, it proceeds to find any prior CPR-numbers associated with the query CPR in the national infrastructure and checks if any of those match a patient on the service. If a match is found, it returns a Person resource with the same information. NOTE: This means that the returned patient can have a different identifier than the one used for request. If no match is found, it finds base information on the national infrastructure and returns a 'limited' Person resource containing only the identifier, name and deceased-state of the person. The operation is an implementation of [https://www.hl7.org/fhir/stu3/patient-operations.html#match](https://www.hl7.org/fhir/stu3/patient-operations.html#match) on the Person resource.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CapabilityStatement"
          }
        ],
        "reference" : {
          "reference" : "CapabilityStatement/plan"
        },
        "name" : "plan",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-plandefinition-recommendation"
        },
        "name" : "PlanDefinition Recommendation",
        "description" : "Plan Definition Recommendation",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-plandefinition-recommendation"
        },
        "name" : "PlanDefinition Recommendation",
        "description" : "Value set of plan definition recommendation codes.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-provenance-policies"
        },
        "name" : "Policies for provenances",
        "description" : "Policies under which data can be provided",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-provenance-policies"
        },
        "name" : "Policies for provenances",
        "description" : "Policies under which data can be provided",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-practice-setting-codes"
        },
        "name" : "Practice Setting Codes",
        "description" : "Value set used for indicating the specialty for organizations.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/107302"
        },
        "name" : "Practitioner/107302",
        "exampleCanonical" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/123"
        },
        "name" : "Practitioner/123",
        "exampleCanonical" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/42"
        },
        "name" : "Practitioner/42",
        "exampleCanonical" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-predecessor"
        },
        "name" : "Predecessor",
        "description" : "Version Predecessor",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-priority"
        },
        "name" : "Priority",
        "description" : "The priority of a message",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-priority"
        },
        "name" : "Priority",
        "description" : "Priority",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-priority"
        },
        "name" : "Priority",
        "description" : "Practitioner roles",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-device-privatelyOwned"
        },
        "name" : "Privately owned",
        "description" : "True if this device is privately owned (BYOD - Bring you own device).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-devicemetric-properties"
        },
        "name" : "Properties",
        "description" : "Properties of this device. Properties are static by nature whereas qualities are dynamic and may change during the life cycle or calibration cycle of a device.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-organization-providerIdentifier"
        },
        "name" : "Provider identifier",
        "description" : "The providerIdentifier of the organization",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/hl7.org-fhir-publication-status"
        },
        "name" : "Publication Status",
        "description" : "The lifecycle status of a Value Set or Concept Map.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-purpose"
        },
        "name" : "Purpose",
        "description" : "Why this is defined",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-devicemetric-qualities"
        },
        "name" : "Qualities",
        "description" : "Current device quality",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-quality"
        },
        "name" : "Quality",
        "description" : "Minimum required or actually assessed quality values. The qualityType element states the type of quality. For different values of qualityType the required or assessed quality value (qualityCode) must be from different value sets. The relation between qualityType and allowed value sets are defined in the definition of value set http://ehealth.sundhed.dk/vs/quality-types.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-devicemetric-qualityHistory"
        },
        "name" : "Quality history",
        "description" : "History of device quality",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-quality-types"
        },
        "name" : "Quality Types",
        "description" : "Quality Types",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-quality-types"
        },
        "name" : "Quality Types",
        "description" : "Types of quality; e.g. situation quality, usability quality, device quality.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CapabilityStatement"
          }
        ],
        "reference" : {
          "reference" : "CapabilityStatement/questionnaire"
        },
        "name" : "questionnaire",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-questionnaire-elements"
        },
        "name" : "Questionnaire Elements",
        "description" : "Questionnaire elements",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-questionnaire-elements"
        },
        "name" : "Questionnaire Elements",
        "description" : "Types of questionnaire elements; e.g. group, question, answer.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-questionnaire-image"
        },
        "name" : "Questionnaire image",
        "description" : "Defines the images in the questionnaire answers and questions.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-questionnaire-intendedOrganization"
        },
        "name" : "Questionnaire intended organization",
        "description" : "The questionnaire is intended to be used by these organizations.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-questionnaire-item-control"
        },
        "name" : "Questionnaire Item Control",
        "description" : "Questionnaire Item Control value set.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-questionnaire-item-image-format"
        },
        "name" : "Questionnaire Item Image Format",
        "description" : "Questionnaire item image format value set.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-questionnaire-item-significance-indicator"
        },
        "name" : "Questionnaire Item Significance Indicator",
        "description" : "Questionnaire Item Significance Indicator",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-questionnaire-significance-indicator"
        },
        "name" : "Questionnaire Item Significance Indicator",
        "description" : "Questionnaire Significance Item Indicator value set.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/item-type"
        },
        "name" : "Questionnaire Item Type",
        "description" : "Distinguishes groups from questions and display text and indicates data type for questions",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-questionnaire-recommendation"
        },
        "name" : "Questionnaire recommendation",
        "description" : "Defines the recommendation state of the questionnaire.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-questionnaire-recommendation"
        },
        "name" : "Questionnaire Recommendation",
        "description" : "Questionnaire Recommendation",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-questionnaireresponse-finding-basis"
        },
        "name" : "Questionnaire response finding basis",
        "description" : "Basis for the overall clinical impression finding of the questionnaire response",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-questionnaire-type"
        },
        "name" : "Questionnaire type",
        "description" : "Concept that represents the overall questionnaire",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-questionnaire-types"
        },
        "name" : "Questionnaire Types",
        "description" : "Questionnaire Types",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-questionnaire-types"
        },
        "name" : "Questionnaire Types",
        "description" : "Questionnaire type value set.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-questionnaire-recommendation"
        },
        "name" : "QuestionnaireRecommendation",
        "description" : "Value set of questionnaire recommendation codes.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/urn-oid-1.2.208.176.7.3.1"
        },
        "name" : "Questionnaires used in the Danish Patient Reported Outcome (PRO)",
        "description" : "Code system for questionnaires used in the Danish Patient Reported",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-communication-recipientCareTeam"
        },
        "name" : "Recipient careteam",
        "description" : "CareTeam that is a recipient of a Communication",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-recommendation"
        },
        "name" : "recommendation",
        "description" : "Recommendation state of the plan definition",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-referenceRange"
        },
        "name" : "Reference range",
        "description" : "Provides guide for interpretation. Must have at least a low or a high.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-reference-range-type"
        },
        "name" : "Reference Range Type",
        "description" : "Reference Range Type",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-reference-range-type"
        },
        "name" : "Reference Range Type",
        "description" : "Reference Range type value set.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-organization-regionCode"
        },
        "name" : "Region code",
        "description" : "The regionCode of the organization",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/iso-reg-subdiv-codes"
        },
        "name" : "Regional subdivision codes",
        "description" : "Subdivision codes (Regional codes) used in Denmark",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/regional-subdivision-codes"
        },
        "name" : "RegionalSubdivisionCodes",
        "description" : "Subdivision codes (Regional codes) used in Denmark",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-registration-deadline"
        },
        "name" : "Registration deadline",
        "description" : "Registration deadline",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-media-related-to"
        },
        "name" : "Related to",
        "description" : "Related to other media.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-organization-relatedTo"
        },
        "name" : "Related to",
        "description" : "Relations to other Organizations",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "RelatedPerson"
          }
        ],
        "reference" : {
          "reference" : "RelatedPerson/relatedperson01"
        },
        "name" : "relatedperson01",
        "exampleCanonical" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/relatedperson-relationshiptype"
        },
        "name" : "RelationshipTypes",
        "description" : "A set of codes that can be used to indicate the relationship between a Patient and a Related Person used in Denmark",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-releasableResource"
        },
        "name" : "Releasable resource",
        "description" : "Indicates if the resource may be shared through national document repositories",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CapabilityStatement"
          }
        ],
        "reference" : {
          "reference" : "CapabilityStatement/reporting"
        },
        "name" : "reporting",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/hl7.org-fhir-request-status"
        },
        "name" : "Request Status",
        "description" : "Codes identifying the stage lifecycle stage of a request",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-resolved-timing"
        },
        "name" : "Resolved timing",
        "description" : "Resolved timing reflects whether a measurement (Observation, QuestionnaireResponse or Media) has been performed ad-hoc or as fulfillment of a measurement regime time slot in which case the extent of the time slot is given by start and end. If the measurement regime has a form for which a time slot cannot be resolved or determining is/was not supported, the type unresolved is used.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/resolved-timing-type"
        },
        "name" : "Resolved Timing Type",
        "description" : "Resolved Timing Type",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/resolved-timing-type"
        },
        "name" : "Resolved Timing Type",
        "description" : "Value set for resolved timing type.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/hl7.org-fhir-resource-types"
        },
        "name" : "Resource Type",
        "description" : "One of the resource types defined as part of FHIR.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-responsible"
        },
        "name" : "Responsible",
        "description" : "Individuals, careteam and/or organization who are responsible in the given context",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "SearchParameter"
          }
        ],
        "reference" : {
          "reference" : "SearchParameter/ehealth-appointment-search-responsible"
        },
        "name" : "responsible",
        "description" : "Search parameter for finding responsible entity on Appointment",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-responsible-organization"
        },
        "name" : "Responsible organization",
        "description" : "Organization responsible in a given context",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-restriction-category"
        },
        "name" : "Restriction category",
        "description" : "The resource is intended for certain category of workflow/responsibility only",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-restriction-category"
        },
        "name" : "Restriction Category",
        "description" : "Restriction Category",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-restriction-category"
        },
        "name" : "Restriction Category",
        "description" : "Value set for restriction category.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "SearchParameter"
          }
        ],
        "reference" : {
          "reference" : "SearchParameter/ehealth-communication-search-restrictionCategory"
        },
        "name" : "restrictionCategory",
        "description" : "Search parameter for finding communication based on restriction category",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/Bundle-t-retrieve-and-transform-APD"
        },
        "name" : "Retrieve and transform APD document",
        "description" : "Retrieves a DK-HL7 Appointment (APD) XML document from national document sharing infrastructure and transforms the APD XML document to a FHIR Appointment (ehealth-appointment profile) resource.Input (url) is the element DocumentReference.content.attachment.url for metadata about the APD document as returned from the DocumentReference search operation performing a query to national document sharing infrastructure. The url, which shall be used as-is in this operation, is an encoding of the XDS DocumentEntry.uniqueId, XDS DocumentEntry.repositoryUniqueId and XDS DocumentEntry.homeCommunityId metadata attributes needed to retrieve the document. Input (consentOverride) signifies, when set to true, that the retrieve of a document shall be performed with override of any withholding of information possibly performed by the national document sharing service in accordance with patient's consents. Override of consents constitutes a form of break-the-glass invocation, known in Danish as værdispring. The preferred method is to call this operation without consent override and to only call with consent override when necessary.Input (reason) is mandatory when input element consentOverride is set to true. The string input is intended as a placeholder for the user's rationale for choosing to override consents. The value is logged in the Infrastructure.The returned FHIR Bundle contains a FHIR Appointment (ehealth-appointment profile) resource.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/Bundle-t-retrieve-and-transform-PHMR"
        },
        "name" : "Retrieve and transform PHMR document",
        "description" : "Retrieves a DK-HL7 Personal Health Monitoring Report (PHMR) XML document from national document sharing infrastructure and transforms the PHMR XML document to FHIR Observation (ehealth-observation profile) resources.Input (url) is the element DocumentReference.content.attachment.url for metadata about the PHMR document as returned from the DocumentReference search operation performing a query to national document sharing infrastructure. The url, which shall be used as-is in this operation, is an encoding of the XDS DocumentEntry.uniqueId, XDS DocumentEntry.repositoryUniqueId and XDS DocumentEntry.homeCommunityId metadata attributes needed to retrieve the document. Input (consentOverride) signifies, when set to true, that the retrieve of a document shall be performed with override of any withholding of information possibly performed by the national document sharing service in accordance with patient's consents. Override of consents constitutes a form of break-the-glass invocation, known in Danish as værdispring. The preferred method is to call this operation without consent override and to only call with consent override when necessary. Input (reason) is mandatory when input element consentOverride is set to true. The string input is intended as a placeholder for the user's rationale for choosing to override consents. The value is logged in the Infrastructure.The returned FHIR Bundle contains a FHIR Composition (ehealth-composition profile) resource referencing one or more FHIR Observation (ehealth-observation profile) resources and referenced resources such as FHIR Organization.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/Bundle-t-retrieve-and-transform-QRD"
        },
        "name" : "Retrieve and transform QRD document",
        "description" : "Retrieves a DK-HL7 Questionnaire Response Document (QRD) XML document from national document sharing infrastructure and transforms the QRD XML document to a FHIR QuestionnaireResponse (ehealth-questionnaireresponse profile) resource.Input (url) is the element DocumentReference.content.attachment.url for metadata about the QRD document as returned from the DocumentReference search operation performing a query to national document sharing infrastructure. The url, which shall be used as-is in this operation, is an encoding of the XDS DocumentEntry.uniqueId, XDS DocumentEntry.repositoryUniqueId and XDS DocumentEntry.homeCommunityId metadata attributes needed to retrieve the document. Input (bundle) must contain a Questionnaire FHIR resource corresponding to the questionnaire definition (QFDD) that the QRD references and is a response to.Input (consentOverride) signifies, when set to true, that the retrieve of a document shall be performed with override of any withholding of information possibly performed by the national document sharing service in accordance with patient's consents. Override of consents constitutes a form of break-the-glass invocation, known in Danish as værdispring. The preferred method is to call this operation without consent override and to only call with consent override when necessary. Input (reason) is mandatory when input element consentOverride is set to true. The string input is intended as a placeholder for the user's rationale for choosing to override consents. The value is logged in the Infrastructure.The returned FHIR Bundle contains a FHIR Composition (ehealth-composition profile) resource referencing a FHIR QuestionnaireResponse (ehealth-documentreference profile) resource, if the Questionnaire FHIR resource was provided as an input, and if the transformation was successful.If the Questionnaire FHIR resource was not provided as an input, or if the transformation was not successful, the returned FHIR Bundle contains the QRD XML document that was retrieved from the national document sharing infrastructure.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/Binary-t-retrieve-document"
        },
        "name" : "Retrieve document",
        "description" : "Input (url) is the element DocumentReference.content.attachment.url for metadata about the QRD/APD/PHMR document as returned from the DocumentReference search operation performing a query to national document sharing infrastructure. The url, which shall be used as-is in this operation, is an encoding of the XDS DocumentEntry.uniqueId, XDS DocumentEntry.repositoryUniqueId and XDS DocumentEntry.homeCommunityId metadata attributes needed to retrieve the document. Input (consentOverride) signifies, when set to true, that the retrieve of a document shall be performed with override of any withholding of information possibly performed  by the national document sharing service in accordance with patient's consents. Override of consents constitutes a form of break-the-glass invocation, known in Danish as værdispring.The preferred method is to call this operation without consent override and to only call with consent override when necessary. Input (reason) is mandatory when input element consentOverride is set to true. The string input is intended as a placeholder for the user's rationale for choosing to override consents.The value is logged in the Infrastructure.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-reuseCriteria"
        },
        "name" : "Reuse criteria",
        "description" : "Defines if and when a response can be reused",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-revision"
        },
        "name" : "Revision",
        "description" : "Business revision of the resource",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-schedule-careplan-and-episode-of-care-stats"
        },
        "name" : "Schedule careplan and episode of care stats",
        "description" : "### Report Contents\nThis report contains a count of active EpisodeOfCare and CarePlans.\n### Grouping \nThis report is grouped by ConditionCode. Each group is returned in a separate JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- period: Filter on CarePlan.period overlap\n\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nThe ConditionCode is a Fhir CodeableConcept. See the implementation guide for details\n\n    {\n        'ConditionCode': {\n            'valueCodeableConcept': {\n                'coding': [{\n                        'system': 'urn:oid:1.2.208.176.2.4',\n                        'code': 'DJ44'\n                    }\n                ]\n            }\n        },\n        'ConditionSummary': {\n            'activeEpisodeOfCareCount': 1,\n            'activeCarePlanCount': 1\n        }\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-schedule-careplan-customization-stats"
        },
        "name" : "Schedule careplan customization stats",
        "description" : "### Report Contents\nThis report contains a count of patient specific modifications of:\n- Measurement schedule timing\n- Reference ranges\n### Grouping \nThis report is grouped by PlanDefinition. Each group is returned in a separate JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- period: Filter on CarePlan.period overlap\n\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nEHealthPlanDefinition is a Fhir resource. See the implementation guide for details\n\n    {\n        'EHealthPlanDefinition': {\n            'resourceType': 'PlanDefinition',\n            'id': '53450',\n            'meta': {\n                'versionId': '1',\n                'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition']\n            },\n            'extension': [{\n                    'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role',\n                    'extension': [{\n                            'url': 'reference',\n                            'valueReference': {\n                                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/85109'\n                            }\n                        }, {\n                            'url': 'role',\n                            'valueCodeableConcept': {\n                                'coding': [{\n                                        'system': 'http://ehealth.sundhed.dk/cs/modifier-role',\n                                        'code': 'owner'\n                                    }\n                                ]\n                            }\n                        }\n                    ]\n                }\n            ],\n            'version': '97219ba1-2202-42a1-b99d-45de3a506b40',\n            'status': 'active'\n        },\n        'CarePlanCustomizationSummary': {\n            'timingCustomizationCount': 1,\n            'referenceRangeCustomizationCount': 1\n        }\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-schedule-careplan-duration-stats"
        },
        "name" : "Schedule careplan duration stats",
        "description" : "### Report Contents\nThis report contains statistics on status changes for CarePlans:\n- count: Number of CarePlans in each state\n- min: Shortest time spent in each state\n- max: Longest time spent in each state\n- sum: Sum of time spent in each state\n- average: Average time spent in each state.\n \nThe durations are specified in [ISO 8601](https://www.digi.com/resources/documentation/digidocs/90001437-13/reference/r_iso_8601_duration_format.htm) format.\n### Grouping \nThis report is grouped by PlanDefinition. Each group is returned in a separate JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- period: Filter on CarePlan.period overlap\n- condition: Filter on EpisodeOfCare condition match\n\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nEHealthPlanDefinition is a Fhir resource. See the implementation guide for details\n\n    {\n        'EHealthPlanDefinition': {\n            'resourceType': 'PlanDefinition',\n            'id': '257',\n            'meta': {\n                'versionId': '1',\n                'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition']\n            },\n            'extension': [{\n                    'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role',\n                    'extension': [{\n                            'url': 'reference',\n                            'valueReference': {\n                                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/73753'\n                            }\n                        }, {\n                            'url': 'role',\n                            'valueCodeableConcept': {\n                                'coding': [{\n                                        'system': 'http://ehealth.sundhed.dk/cs/modifier-role',\n                                        'code': 'owner'\n                                    }\n                                ]\n                            }\n                        }\n                    ]\n                }\n            ],\n            'version': 'dc9ecd87-163f-4d2f-bdfe-434085eafe4f',\n            'status': 'active'\n        },\n        'CarePlanStatusDurationSummary': {\n            'statusDurationStatistics': {\n                'draft': {\n                    'status': {\n                        'valueCodeableConcept': {\n                            'coding': [{\n                                    'system': 'http://hl7.org/fhir/care-plan-status',\n                                    'code': 'draft'\n                                }\n                            ]\n                        }\n                    },\n                    'durationStatistics': {\n                        'count': 2,\n                        'min': 'P10DT10H0M0S',\n                        'max': 'P15DT0H0M0S',\n                        'sum': 'P25DT10H0M0S',\n                        'average': 'P12DT17H0M0S'\n                    }\n                },\n                'active': {\n                    'status': {\n                        'valueCodeableConcept': {\n                            'coding': [{\n                                    'system': 'http://hl7.org/fhir/care-plan-status',\n                                    'code': 'active'\n                                }\n                            ]\n                        }\n                    },\n                    'durationStatistics': {\n                        'count': 2,\n                        'min': 'P200DT0H0M0S',\n                        'max': 'P200DT0H0M0S',\n                        'sum': 'P400DT0H0M0S',\n                        'average': 'P200DT0H0M0S'\n                    }\n                },\n                'completed': {\n                    'status': {\n                        'valueCodeableConcept': {\n                            'coding': [{\n                                    'system': 'http://hl7.org/fhir/care-plan-status',\n                                    'code': 'completed'\n                                }\n                            ]\n                        }\n                    },\n                    'durationStatistics': {\n                        'count': 2,\n                        'min': 'P284DT14H0M0S',\n                        'max': 'P380DT0H0M0S',\n                        'sum': 'P664DT14H0M0S',\n                        'average': 'P332DT7H0M0S'\n                    }\n                },\n                'suspended': {\n                    'status': {\n                        'valueCodeableConcept': {\n                            'coding': [{\n                                    'system': 'http://hl7.org/fhir/care-plan-status',\n                                    'code': 'suspended'\n                                }\n                            ]\n                        }\n                    },\n                    'durationStatistics': {\n                        'count': 2,\n                        'min': 'P5DT0H0M0S',\n                        'max': 'P5DT0H0M0S',\n                        'sum': 'P10DT0H0M0S',\n                        'average': 'P5DT0H0M0S'\n                    }\n                }\n            }\n        }\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-schedule-careplans-by-patient"
        },
        "name" : "Schedule careplans-by patient",
        "description" : "### Report Contents\nThis report contains the following resources:\n- EpisodeOfCare\n- PlanDefinition\n- CarePlan\n- ServiceRequest\n### Grouping \nThis report is grouped by EpisodeOfCare. Each group is returned in a separate JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- period: Filter on CarePlan.period overlap\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nAll returned objects are Fhir resources. See the implementation guide for details\n\n    {\n        'EHealthEpisodeOfCare': {\n            'resourceType': 'EpisodeOfCare',\n            'id': '30254',\n            'meta': {\n                'versionId': '1',\n                'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare']\n            },\n            'extension': [{\n                    'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization',\n                    'valueReference': {\n                        'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/88873'\n                    }\n                }\n            ],\n            'status': 'active',\n            'diagnosis': [{\n                    'condition': {\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/66740'\n                    },\n                    'rank': 1\n                }\n            ],\n            'patient': {\n                'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/18637'\n            },\n            'managingOrganization': {\n                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/16046'\n            },\n            'period': {\n                'start': '1970-01-01T01:00:01+01:00',\n                'end': '1970-01-01T01:01:40+01:00'\n            }\n        },\n        'EHealthCarePlan': [{\n                'resourceType': 'CarePlan',\n                'id': '1597',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan']\n                },\n                'definition': [{\n                        'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/59578'\n                    }\n                ],\n                'status': 'draft',\n                'intent': 'option',\n                'category': [{\n                        'coding': [{\n                                'system': 'http://ehealth.sundhed.dk/cs/careplan-category',\n                                'code': 'TBD'\n                            }\n                        ]\n                    }\n                ],\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/57779'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/30254'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                },\n                'addresses': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/74721'\n                    }\n                ],\n                'activity': [{\n                        'reference': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/76916'\n                        }\n                    }\n                ]\n            }\n        ],\n        'EHealthPlanDefinition': [{\n                'resourceType': 'PlanDefinition',\n                'id': '59578',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role',\n                        'extension': [{\n                                'url': 'reference',\n                                'valueReference': {\n                                    'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/41757'\n                                }\n                            }, {\n                                'url': 'role',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/modifier-role',\n                                            'code': 'owner'\n                                        }\n                                    ]\n                                }\n                            }\n                        ]\n                    }\n                ],\n                'version': 'c701b8e8-abe6-41bd-9db5-c05b94bc1e2b',\n                'status': 'active'\n            }\n        ],\n        'EHealthServiceRequest': [{\n                'resourceType': 'ServiceRequest',\n                'id': '76916',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy',\n                        'valueCodeableConcept': {\n                            'coding': [{\n                                    'system': 'http://ehealth.sundhed.dk/cs/measurement-sharing-policies',\n                                    'code': 'TBD'\n                                }\n                            ]\n                        }\n                    }\n                ],\n                'definition': [{\n                        'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/13593'\n                    }\n                ],\n                'status': 'completed',\n                'intent': 'filler-order',\n                'code': {\n                    'coding': [{\n                            'system': 'http://ehealth.sundhed.dk/cs/activitydefinition-code',\n                            'code': 'TBD'\n                        }\n                    ],\n                    'text': '31d136f2-0b98-4e0a-8f82-f0731b54893d'\n                },\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/49397'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/72791'\n                }\n            }\n        ]\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-schedule-careteam-stats"
        },
        "name" : "Schedule careteam stats",
        "description" : "### Report Contents\nThis report contains counts of resources associated with CareTeams:\n- EpisodeOfCare\n- CarePlan\n- Task: Count for each task category\n### Grouping \nThis report is grouped by CareTeam. Each group is returned in a separate JSon file.\n### Parameters\n- organization: Filter on CareTeam.managingOrganization match\n- period: Filter on:\n    - CarePlan.period overlap for CarePlans\n    - EpisodeOfCare.period overlap for EpisodeOfCare\n    - Task.authoredOn inside period for Tasks\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nEHealthCareTeam is a Fhir resource. See the implementation guide for details\n\n    {\n        'EHealthCareTeam': {\n            'resourceType': 'CareTeam',\n            'id': '12958',\n            'meta': {\n                'versionId': '1',\n                'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam']\n            },\n            'identifier': [{\n                    'id': '59f70e4e-1c31-4647-8c91-404939b6b14e',\n                    'system': 'urn:ietf:rfc:3986'\n                }\n            ],\n            'status': 'active',\n            'name': '0cea5c11-af39-4e5c-8733-9f532ea9961a',\n            'reasonCode': [{\n                    'coding': [{\n                            'system': 'http://ehealth.sundhed.dk/cs/conditions',\n                            'code': 'TBD'\n                        }\n                    ]\n                }\n            ],\n            'managingOrganization': [{\n                    'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/66642'\n                }\n            ]\n        },\n        'CareTeamSummary': {\n            'episodeOfCareCount': 2,\n            'carePlanCount': 6,\n            'taskCountByCategory': {\n                'MissingMeasurementResolving': 2\n            }\n        }\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-schedule-measurement-stats"
        },
        "name" : "Schedule measurement stats",
        "description" : "### Report Contents\nThis report contains counts of Measurements for each EpisodeOfCare:\n- Observation\n- QuestionnaireResponse\n- Media\n### Grouping \nThis report is grouped by EpsiodeOfCare. Each group is returned in a separate JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- period: Filter on:\n    - Observation.effective inside period for Observations\n    - Questionnaire.authored inside period for QuestionnaireResponses\n    - Media.occurence inside period for Media\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nEHealthEpisodeOfCare is a Fhir resource. See the implementation guide for details\n\n    {\n        'EHealthEpisodeOfCare': {\n            'resourceType': 'EpisodeOfCare',\n            'id': '21357',\n            'meta': {\n                'versionId': '1',\n                'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare']\n            },\n            'extension': [{\n                    'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization',\n                    'valueReference': {\n                        'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/30170'\n                    }\n                }\n            ],\n            'status': 'active',\n            'diagnosis': [{\n                    'condition': {\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/70274'\n                    },\n                    'rank': 1\n                }\n            ],\n            'patient': {\n                'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/26565'\n            },\n            'managingOrganization': {\n                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/28358'\n            },\n            'period': {\n                'start': '1970-01-01T01:00:01+01:00',\n                'end': '1970-01-01T01:01:40+01:00'\n            }\n        },\n        'EpisodeOfCareMeasurementSummary': {\n            'observationCount': 5,\n            'mediaCount': 0,\n            'questionnaireResponseCount': 0\n        }\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-schedule-patient-devices"
        },
        "name" : "Schedule patient devices",
        "description" : "### Report Contents\nThis report contains Device information for each EpisodeOfCare:\n- Device\n- DeviceUseStatement\n- DeviceMetrics\n### Grouping \nThis report is grouped by EpsiodeOfCare. Each group is returned in a separate JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- period: Filter on DeviceUseStatement.whenUsed overlap\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nAll returned objects are Fhir resources. See the implementation guide for details\n\n    {\n        'EHealthEpisodeOfCare': {\n            'resourceType': 'EpisodeOfCare',\n            'id': 'F417C17F9FDE24C9090BD629C8EE1697',\n            'meta': {\n                'versionId': '1',\n                'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare']\n            },\n            'extension': [{\n                    'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization',\n                    'valueReference': {\n                        'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/313D8B0E0AC8EA8169D1DA45ECEEACB9'\n                    }\n                }\n            ],\n            'status': 'active',\n            'diagnosis': [{\n                    'condition': {\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/9A7FCD55CA3031585A8F1690DB1D8034'\n                    },\n                    'rank': 1\n                }\n            ],\n            'patient': {\n                'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/A1D94F323D8EF09E5D913D9522FD83C4'\n            },\n            'managingOrganization': {\n                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/8DC75F2B12BCC832F92CC065C3D0B451'\n            },\n            'period': {\n                'start': '1970-01-01T01:00:01+01:00',\n                'end': '1970-01-01T01:01:40+01:00'\n            }\n        },\n        'EHealthDeviceUseStatement': [{\n                'resourceType': 'DeviceUseStatement',\n                'id': '9541E8EAEAD24376F208D5CD8A4D25F5',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context',\n                        'valueReference': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/CarePlan/23D34B29DD02EB232B6575537FE8ADC5'\n                        }\n                    }\n                ],\n                'status': 'active',\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/AC38B1F6391F256002E5A7BE69CB2586'\n                },\n                'device': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/08D51B81A7FE5B480278150A94D4048A'\n                }\n            }\n        ],\n        'EHealthDevice': [{\n                'resourceType': 'Device',\n                'id': '08D51B81A7FE5B480278150A94D4048A',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned',\n                        'valueBoolean': true\n                    }\n                ],\n                'status': 'active'\n            }\n        ],\n        'EHealthDeviceMetric': [{\n                'resourceType': 'DeviceMetric',\n                'id': '7EA21ACD27EE012439F1440574A6BB21',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 5\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 10\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 12\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 14\n                            }\n                        ]\n                    }\n                ],\n                'identifier': {\n                    'value': 'Foo'\n                },\n                'type': {\n                    'text': 'code'\n                },\n                'source': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/08D51B81A7FE5B480278150A94D4048A'\n                },\n                'category': 'calculation'\n            }\n        ]\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-schedule-patient-gdpr"
        },
        "name" : "Schedule patient GDPR",
        "description" : "### Report Contents\nThis report contains all information related to the specified Patient:\n### Grouping \nNone. This report returns a single JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- period: not used.\n- patient: The patient to fetch information for.\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nAll returned objects are Fhir resources. See the implementation guide for details\n\n    {\n        'Patient': {\n            'resourceType': 'Patient',\n            'id': '70791',\n            'meta': {\n                'versionId': '1'\n            }\n        },\n        'Communication': [{\n                'resourceType': 'Communication',\n                'id': '29256',\n                'meta': {\n                    'versionId': '1'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                }\n            }\n        ],\n        'RelatedPerson': [{\n                'resourceType': 'RelatedPerson',\n                'id': '44196',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson']\n                },\n                'identifier': [{\n                        'use': 'official',\n                        'system': 'urn:oid:1.2.208.176.1.2',\n                        'value': '2412001234'\n                    }\n                ],\n                'patient': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791'\n                },\n                'name': [{\n                        'text': 'Tester'\n                    }\n                ]\n            }\n        ],\n        'Appointment': [{\n                'resourceType': 'Appointment',\n                'id': '74036',\n                'meta': {\n                    'versionId': '1'\n                },\n                'participant': [{\n                        'id': '5fda865d-5e46-4fc4-8dcc-9b5f9a6b501a',\n                        'actor': {\n                            'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791'\n                        }\n                    }\n                ]\n            }\n        ],\n        'AppointmentResponse': [{\n                'resourceType': 'AppointmentResponse',\n                'id': '63226',\n                'meta': {\n                    'versionId': '1'\n                },\n                'actor': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791'\n                }\n            }\n        ],\n        'EHealthEpisodeOfCare': [{\n                'resourceType': 'EpisodeOfCare',\n                'id': '10928',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization',\n                        'valueReference': {\n                            'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/43014'\n                        }\n                    }\n                ],\n                'status': 'active',\n                'diagnosis': [{\n                        'condition': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/33654'\n                        },\n                        'rank': 1\n                    }\n                ],\n                'patient': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791'\n                },\n                'managingOrganization': {\n                    'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/34361'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                }\n            }, {\n                'resourceType': 'EpisodeOfCare',\n                'id': '48392',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization',\n                        'valueReference': {\n                            'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/41282'\n                        }\n                    }\n                ],\n                'status': 'active',\n                'diagnosis': [{\n                        'condition': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/87020'\n                        },\n                        'rank': 1\n                    }\n                ],\n                'patient': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/47956'\n                },\n                'managingOrganization': {\n                    'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/34361'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                }\n            }\n        ],\n        'EHealthDeviceUseStatement': [{\n                'resourceType': 'DeviceUseStatement',\n                'id': '4021',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context',\n                        'valueReference': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/CarePlan/87235'\n                        }\n                    }\n                ],\n                'status': 'active',\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/69099'\n                },\n                'device': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729'\n                }\n            }, {\n                'resourceType': 'DeviceUseStatement',\n                'id': '5732',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context',\n                        'valueReference': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/CarePlan/23385'\n                        }\n                    }\n                ],\n                'status': 'active',\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/10543'\n                },\n                'device': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/91432'\n                }\n            }\n        ],\n        'EHealthDevice': [{\n                'resourceType': 'Device',\n                'id': '81729',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned',\n                        'valueBoolean': true\n                    }\n                ],\n                'status': 'active'\n            }, {\n                'resourceType': 'Device',\n                'id': '91432',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned',\n                        'valueBoolean': true\n                    }\n                ],\n                'status': 'active'\n            }\n        ],\n        'EHealthDeviceMetric': [{\n                'resourceType': 'DeviceMetric',\n                'id': '35094',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 5\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 10\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 12\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 14\n                            }\n                        ]\n                    }\n                ],\n                'identifier': {\n                    'value': 'Foo'\n                },\n                'type': {\n                    'text': 'code'\n                },\n                'source': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729'\n                },\n                'category': 'calculation'\n            }, {\n                'resourceType': 'DeviceMetric',\n                'id': '22449',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 5\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 10\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 12\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 14\n                            }\n                        ]\n                    }\n                ],\n                'identifier': {\n                    'value': 'Foo'\n                },\n                'type': {\n                    'text': 'code'\n                },\n                'source': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729'\n                },\n                'category': 'calculation'\n            }\n        ],\n        'EHealthConsent': [{\n                'resourceType': 'Consent',\n                'id': '51690',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-consent']\n                },\n                'status': 'active',\n                'category': [{\n                        'coding': [{\n                                'code': 'TBD'\n                            }\n                        ]\n                    }\n                ],\n                'patient': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                },\n                'consentingParty': [{\n                        'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/41034'\n                    }\n                ],\n                'actor': [{\n                        'id': 'f31bec27-965f-49ea-b8fe-5fdb259c539d',\n                        'role': {\n                            'coding': [{\n                                    'code': 'authserver'\n                                }\n                            ]\n                        },\n                        'reference': {\n                            'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/60499'\n                        }\n                    }\n                ],\n                'policyRule': 'Rule',\n                'data': [{\n                        'meaning': 'related',\n                        'reference': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/51427'\n                        }\n                    }\n                ]\n            }\n        ],\n        'EHealthCarePlan': [{\n                'resourceType': 'CarePlan',\n                'id': '87235',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan']\n                },\n                'definition': [{\n                        'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/98996'\n                    }\n                ],\n                'status': 'draft',\n                'intent': 'option',\n                'category': [{\n                        'coding': [{\n                                'system': 'http://ehealth.sundhed.dk/cs/careplan-category',\n                                'code': 'TBD'\n                            }\n                        ]\n                    }\n                ],\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/55953'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                },\n                'addresses': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/25664'\n                    }\n                ]\n            }, {\n                'resourceType': 'CarePlan',\n                'id': '23385',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan']\n                },\n                'definition': [{\n                        'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/83648'\n                    }\n                ],\n                'status': 'draft',\n                'intent': 'option',\n                'category': [{\n                        'coding': [{\n                                'system': 'http://ehealth.sundhed.dk/cs/careplan-category',\n                                'code': 'TBD'\n                            }\n                        ]\n                    }\n                ],\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/51258'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/48392'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                },\n                'addresses': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/4845'\n                    }\n                ]\n            }\n        ],\n        'EHealthServiceRequest': [{\n                'resourceType': 'ServiceRequest',\n                'id': '18904',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy',\n                        'valueCodeableConcept': {\n                            'coding': [{\n                                    'system': 'http://ehealth.sundhed.dk/cs/measurement-sharing-policies',\n                                    'code': 'TBD'\n                                }\n                            ]\n                        }\n                    }\n                ],\n                'definition': [{\n                        'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/64273'\n                    }\n                ],\n                'status': 'completed',\n                'intent': 'filler-order',\n                'code': {\n                    'coding': [{\n                            'system': 'http://ehealth.sundhed.dk/cs/activitydefinition-code',\n                            'code': 'TBD'\n                        }\n                    ],\n                    'text': '7654414a-7f86-4170-9920-fde60368b58b'\n                },\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/59415'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                }\n            }\n        ],\n        'EHealthCondition': [{\n                'resourceType': 'Condition',\n                'id': '22743',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-condition']\n                },\n                'clinicalStatus': 'active',\n                'code': {\n                    'coding': [{\n                            'system': 'http://ehealth.sundhed.dk/cs/conditions',\n                            'code': 'TBD'\n                        }\n                    ]\n                },\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/84730'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                }\n            }\n        ],\n        'EHealthObservation': [{\n                'resourceType': 'Observation',\n                'id': '55832',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation']\n                },\n                'basedOn': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/69506'\n                    }\n                ],\n                'status': 'amended',\n                'code': {\n                    'coding': [{\n                            'system': 'urn:oid:1.2.208.176.2.1',\n                            'code': 'NPU03011'\n                        }\n                    ]\n                },\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/96798'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                },\n                'effectivePeriod': {\n                    'start': '2020-03-26T13:37:40+01:00',\n                    'end': '2020-03-26T13:37:40+01:00'\n                },\n                'performer': [{\n                        'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/43621'\n                    }\n                ],\n                'device': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/30416'\n                }\n            }\n        ],\n        'EHealthQuestionnaireResponse': [{\n                'resourceType': 'QuestionnaireResponse',\n                'id': '21957',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaireresponse']\n                },\n                'basedOn': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/12403'\n                    }\n                ],\n                'questionnaire': {\n                    'reference': 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/42078'\n                },\n                'status': 'completed',\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/47155'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                },\n                'authored': '2020-03-26T13:37:40+01:00',\n                'source': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/61666'\n                }\n            }\n        ],\n        'EHealthMedia': [{\n                'resourceType': 'Media',\n                'id': '18256',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-media']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-quality',\n                        'extension': [{\n                                'url': 'qualityType',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/quality-types',\n                                            'code': 'TBD'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'qualityCode',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/usage-quality',\n                                            'code': 'TBD'\n                                        }\n                                    ]\n                                }\n                            }\n                        ]\n                    }\n                ],\n                'basedOn': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/98474'\n                    }\n                ],\n                'type': 'audio',\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/20886'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                },\n                'occurrenceDateTime': '2020-03-26T13:37:40+01:00',\n                'content': {\n                    'language': 'en'\n                }\n            }\n        ],\n        'EHealthClinicalImpression': [{\n                'resourceType': 'ClinicalImpression',\n                'id': '39697',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression']\n                },\n                'status': 'draft',\n                'code': {\n                    'coding': [{\n                            'system': 'http://ehealth.sundhed.dk/cs/clinicalimpression-codes',\n                            'code': 'TBD'\n                        }\n                    ]\n                },\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/32140'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                }\n            }\n        ],\n        'EHealthTask': [{\n                'resourceType': 'Task',\n                'id': '96988',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-task']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-task-category',\n                        'valueCodeableConcept': {\n                            'coding': [{\n                                    'system': 'http://ehealth.sundhed.dk/cs/task-category',\n                                    'code': 'TBD'\n                                }\n                            ]\n                        }\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-restriction-category',\n                        'valueCodeableConcept': {\n                            'coding': [{\n                                    'system': 'http://ehealth.sundhed.dk/cs/restriction-category',\n                                    'code': 'None'\n                                }\n                            ]\n                        }\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-task-responsible',\n                        'valueReference': {\n                            'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Practitioner/74334'\n                        }\n                    }\n                ],\n                'status': 'draft',\n                'intent': 'proposal',\n                'priority': 'routine',\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                }\n            }\n        ],\n        'EHealthCommunication': [{\n                'resourceType': 'Communication',\n                'id': '29256',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication']\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                }\n            }\n        ],\n        'EHealthProvenance': [{\n                'resourceType': 'Provenance',\n                'id': '68399',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-provenance']\n                },\n                'target': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                    }\n                ],\n                'recorded': '2020-03-26T13:37:39.772+01:00',\n                'policy': ['policy'],\n                'agent': [{\n                        'whoReference': {\n                            'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/6901'\n                        }\n                    }\n                ]\n            }, {\n                'resourceType': 'Provenance',\n                'id': '96195',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-provenance']\n                },\n                'target': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/48392'\n                    }\n                ],\n                'recorded': '2020-03-26T13:37:39.801+01:00',\n                'policy': ['policy'],\n                'agent': [{\n                        'whoReference': {\n                            'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/45854'\n                        }\n                    }\n                ]\n            }\n        ]\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-schedule-patient-total"
        },
        "name" : "Schedule patient total",
        "description" : "### Report Contents\nThis report contains clinical information for each Patient\n### Grouping \nThis report is grouped by EpsiodeOfCare. Each group is returned in a separate JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- period: Filter on EpisodeOfCare.period overlap\n- conditionCode: Filter on Condition.code related to EpisodeOfCare\n- status: Filter on EpisodeOfCare.status\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nAll returned objects are Fhir resources. See the implementation guide for details\n\n    {\n        'Patient': {\n            'resourceType': 'Patient',\n            'id': '70791',\n            'meta': {\n                'versionId': '1'\n            }\n        },\n        'EHealthEpisodeOfCare': [{\n                'resourceType': 'EpisodeOfCare',\n                'id': '10928',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization',\n                        'valueReference': {\n                            'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/43014'\n                        }\n                    }\n                ],\n                'status': 'active',\n                'diagnosis': [{\n                        'condition': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/33654'\n                        },\n                        'rank': 1\n                    }\n                ],\n                'patient': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791'\n                },\n                'managingOrganization': {\n                    'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/34361'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                }\n            }, {\n                'resourceType': 'EpisodeOfCare',\n                'id': '48392',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization',\n                        'valueReference': {\n                            'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/41282'\n                        }\n                    }\n                ],\n                'status': 'active',\n                'diagnosis': [{\n                        'condition': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/87020'\n                        },\n                        'rank': 1\n                    }\n                ],\n                'patient': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/47956'\n                },\n                'managingOrganization': {\n                    'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/34361'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                }\n            }\n        ],\n        'EHealthDeviceUseStatement': [{\n                'resourceType': 'DeviceUseStatement',\n                'id': '4021',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context',\n                        'valueReference': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/CarePlan/87235'\n                        }\n                    }\n                ],\n                'status': 'active',\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/69099'\n                },\n                'device': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729'\n                }\n            }, {\n                'resourceType': 'DeviceUseStatement',\n                'id': '5732',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context',\n                        'valueReference': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/CarePlan/23385'\n                        }\n                    }\n                ],\n                'status': 'active',\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/10543'\n                },\n                'device': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/91432'\n                }\n            }\n        ],\n        'EHealthDevice': [{\n                'resourceType': 'Device',\n                'id': '81729',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned',\n                        'valueBoolean': true\n                    }\n                ],\n                'status': 'active'\n            }, {\n                'resourceType': 'Device',\n                'id': '91432',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned',\n                        'valueBoolean': true\n                    }\n                ],\n                'status': 'active'\n            }\n        ],\n        'EHealthDeviceMetric': [{\n                'resourceType': 'DeviceMetric',\n                'id': '35094',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 5\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 10\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 12\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 14\n                            }\n                        ]\n                    }\n                ],\n                'identifier': {\n                    'value': 'Foo'\n                },\n                'type': {\n                    'text': 'code'\n                },\n                'source': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729'\n                },\n                'category': 'calculation'\n            }, {\n                'resourceType': 'DeviceMetric',\n                'id': '22449',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 5\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 10\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 12\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 14\n                            }\n                        ]\n                    }\n                ],\n                'identifier': {\n                    'value': 'Foo'\n                },\n                'type': {\n                    'text': 'code'\n                },\n                'source': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/81729'\n                },\n                'category': 'calculation'\n            }\n        ],\n        'EHealthConsent': [{\n                'resourceType': 'Consent',\n                'id': '51690',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-consent']\n                },\n                'status': 'active',\n                'category': [{\n                        'coding': [{\n                                'code': 'TBD'\n                            }\n                        ]\n                    }\n                ],\n                'patient': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/70791'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                },\n                'consentingParty': [{\n                        'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/41034'\n                    }\n                ],\n                'actor': [{\n                        'id': 'f31bec27-965f-49ea-b8fe-5fdb259c539d',\n                        'role': {\n                            'coding': [{\n                                    'code': 'authserver'\n                                }\n                            ]\n                        },\n                        'reference': {\n                            'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/60499'\n                        }\n                    }\n                ],\n                'policyRule': 'Rule',\n                'data': [{\n                        'meaning': 'related',\n                        'reference': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/51427'\n                        }\n                    }\n                ]\n            }\n        ],\n        'EHealthCarePlan': [{\n                'resourceType': 'CarePlan',\n                'id': '87235',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan']\n                },\n                'definition': [{\n                        'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/98996'\n                    }\n                ],\n                'status': 'draft',\n                'intent': 'option',\n                'category': [{\n                        'coding': [{\n                                'system': 'http://ehealth.sundhed.dk/cs/careplan-category',\n                                'code': 'TBD'\n                            }\n                        ]\n                    }\n                ],\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/55953'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                },\n                'addresses': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/25664'\n                    }\n                ]\n            }, {\n                'resourceType': 'CarePlan',\n                'id': '23385',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan']\n                },\n                'definition': [{\n                        'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/83648'\n                    }\n                ],\n                'status': 'draft',\n                'intent': 'option',\n                'category': [{\n                        'coding': [{\n                                'system': 'http://ehealth.sundhed.dk/cs/careplan-category',\n                                'code': 'TBD'\n                            }\n                        ]\n                    }\n                ],\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/51258'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/48392'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                },\n                'addresses': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/4845'\n                    }\n                ]\n            }\n        ],\n        'EHealthServiceRequest': [{\n                'resourceType': 'ServiceRequest',\n                'id': '18904',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy',\n                        'valueCodeableConcept': {\n                            'coding': [{\n                                    'system': 'http://ehealth.sundhed.dk/cs/measurement-sharing-policies',\n                                    'code': 'TBD'\n                                }\n                            ]\n                        }\n                    }\n                ],\n                'definition': [{\n                        'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/64273'\n                    }\n                ],\n                'status': 'completed',\n                'intent': 'filler-order',\n                'code': {\n                    'coding': [{\n                            'system': 'http://ehealth.sundhed.dk/cs/activitydefinition-code',\n                            'code': 'TBD'\n                        }\n                    ],\n                    'text': '7654414a-7f86-4170-9920-fde60368b58b'\n                },\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/59415'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                }\n            }\n        ],\n        'EHealthCondition': [{\n                'resourceType': 'Condition',\n                'id': '22743',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-condition']\n                },\n                'clinicalStatus': 'active',\n                'code': {\n                    'coding': [{\n                            'system': 'http://ehealth.sundhed.dk/cs/conditions',\n                            'code': 'TBD'\n                        }\n                    ]\n                },\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/84730'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                }\n            }\n        ],\n        'EHealthObservation': [{\n                'resourceType': 'Observation',\n                'id': '55832',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation']\n                },\n                'basedOn': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/69506'\n                    }\n                ],\n                'status': 'amended',\n                'code': {\n                    'coding': [{\n                            'system': 'urn:oid:1.2.208.176.2.1',\n                            'code': 'NPU03011'\n                        }\n                    ]\n                },\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/96798'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                },\n                'effectivePeriod': {\n                    'start': '2020-03-26T13:37:40+01:00',\n                    'end': '2020-03-26T13:37:40+01:00'\n                },\n                'performer': [{\n                        'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/43621'\n                    }\n                ],\n                'device': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/30416'\n                }\n            }\n        ],\n        'EHealthQuestionnaireResponse': [{\n                'resourceType': 'QuestionnaireResponse',\n                'id': '21957',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaireresponse']\n                },\n                'basedOn': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/12403'\n                    }\n                ],\n                'questionnaire': {\n                    'reference': 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/42078'\n                },\n                'status': 'completed',\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/47155'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                },\n                'authored': '2020-03-26T13:37:40+01:00',\n                'source': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/61666'\n                }\n            }\n        ],\n        'EHealthMedia': [{\n                'resourceType': 'Media',\n                'id': '18256',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-media']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-quality',\n                        'extension': [{\n                                'url': 'qualityType',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/quality-types',\n                                            'code': 'TBD'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'qualityCode',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/usage-quality',\n                                            'code': 'TBD'\n                                        }\n                                    ]\n                                }\n                            }\n                        ]\n                    }\n                ],\n                'basedOn': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/98474'\n                    }\n                ],\n                'type': 'audio',\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/20886'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                },\n                'occurrenceDateTime': '2020-03-26T13:37:40+01:00',\n                'content': {\n                    'language': 'en'\n                }\n            }\n        ],\n        'EHealthClinicalImpression': [{\n                'resourceType': 'ClinicalImpression',\n                'id': '39697',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression']\n                },\n                'status': 'draft',\n                'code': {\n                    'coding': [{\n                            'system': 'http://ehealth.sundhed.dk/cs/clinicalimpression-codes',\n                            'code': 'TBD'\n                        }\n                    ]\n                },\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/32140'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/10928'\n                }\n            }\n        ]\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-schedule-patient-usage-stats"
        },
        "name" : "Schedule patient usage statistics",
        "description" : "### Report Contents\nThis report contains an overview of the number of unique active citizens with Episodes of Care, shown both on monthly and yearly basis.\n### Grouping \nThis report is grouped by months and years. All groups are contained in the same JSON file.\n### Parameters\n- None\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing a JSon file corresponding to the report groups.\n### Example output\nAll returned objects are Fhir resources. See the implementation guide for details\nFirst example is the monthly data:\n\n{\n\t'PatientsUsageSummary': {\n\t\t'monthData': [\n\t\t\t{\n\t\t\t\t'month': '1',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '2',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '3',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '4',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '5',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '6',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '7',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '8',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '9',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '10',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '11',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '12',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t}\n      ]\n   }\n}\n\nSecond example is the yearly data:\n\n{\n\t'PatientsUsageSummary': {\n\t\t'yearData': [\n\t\t\t{\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 12,\n\t\t\t\t\t\t'average': 1.0,\n\t\t\t\t\t\t'usageBaseline': 10000,\n\t\t\t\t\t\t'averageRounded': 1000.0,\n\t\t\t\t\t\t'averageBeyondBaseline': 0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 12,\n\t\t\t\t\t\t'average': 1.0,\n\t\t\t\t\t\t'usageBaseline': 10000,\n\t\t\t\t\t\t'averageRounded': 1000.0,\n\t\t\t\t\t\t'averageBeyondBaseline': 0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t}\n      ]\n   }\n}",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-schedule-practitioner-gdpr"
        },
        "name" : "Schedule practitioner GDPR",
        "description" : "### Report Contents\nThis report contains all information related to the specified Practitioner\n- Practitioner\n- CareTeam\n- PractitionerRole\n### Grouping \nNone. The report is returned in a single JSon file.\n### Parameters\n- organization: \n    - Practitioner: Not filtered\n    - CareTeam: Filter on CareTeam.ManagingOrganization match\n    - PractitionerRole: Filter on PractitionerRole.Organization match\n- period: not used\n- practitionerID: The practitioner to fetch information for\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nAll returned objects are Fhir resources. See the implementation guide for details\n\n    {\n        'EHealthPractitioner': {\n            'resourceType': 'Practitioner',\n            'id': '20599',\n            'meta': {\n                'versionId': '1',\n                'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner']\n            },\n            'name': [{\n                    'family': '2f82a48c-61cc-4c7f-855a-3e6b59729ef1'\n                }\n            ]\n        },\n        'EHealthPractitionerRole': [],\n        'EHealthCareTeam': [{\n                'resourceType': 'CareTeam',\n                'id': '99438',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam']\n                },\n                'identifier': [{\n                        'id': 'f556eab1-dbe9-40e3-9edd-149fa3bd1ae0',\n                        'system': 'urn:ietf:rfc:3986'\n                    }\n                ],\n                'status': 'active',\n                'name': 'f9d27974-6a6a-44fb-b6eb-bcd22d769a18',\n                'participant': [{\n                        'member': {\n                            'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Practitioner/20599'\n                        }\n                    }\n                ],\n                'reasonCode': [{\n                        'coding': [{\n                                'system': 'http://ehealth.sundhed.dk/cs/conditions',\n                                'code': 'TBD'\n                            }\n                        ]\n                    }\n                ],\n                'managingOrganization': [{\n                        'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/94174'\n                    }\n                ]\n            }\n        ]\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-schedule-practitioner-stats"
        },
        "name" : "Schedule practitioner stats",
        "description" : "### Report Contents\nThis report contains counts of practitioners associated with Organizations and CareTeams\n- List of Organization and associated practitonerCount\n- List of CareTeam and associated practitionerCount\n### Grouping \nNone. The report is returned in a single JSon file.\n### Parameters\n- organization: \n    - CareTeam: Filter on CareTeam.ManagingOrganization match\n    - PractitionerRole: Filter on PractitionerRole.Organization match\n- period\n    - CareTeam: Filter on CareTeam.participant.period overlap\n    - PractitionerRole: Filter on PractitionerRole.perid overlap\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nOrganization and CareTeam are Fhir resources. See the implementation guide for details\n\n    {\n        'PractitionerSummary': {\n            'organizationPractitionerStatistics': [{\n                    'organization': {\n                        'resourceType': 'Organization',\n                        'id': '69075',\n                        'meta': {\n                            'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization']\n                        },\n                        'extension': [{\n                                'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-source',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/organization-source',\n                                            'code': 'manual'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-synchronizationStatus',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/organization-synchronization-status',\n                                            'code': 'NotSynchronized'\n                                        }\n                                    ]\n                                }\n                            }\n                        ],\n                        'name': 'e7c2b264-b2d9-4a6d-aba9-f23be1017d39'\n                    },\n                    'practitionerCount': 1\n                }\n            ],\n            'careTeamPractitionerStatistics': [{\n                    'careTeam': {\n                        'resourceType': 'CareTeam',\n                        'id': '44267',\n                        'meta': {\n                            'versionId': '1',\n                            'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam']\n                        },\n                        'identifier': [{\n                                'id': '7ced02e2-3082-4e02-86cc-030e8df8906d',\n                                'system': 'urn:ietf:rfc:3986'\n                            }\n                        ],\n                        'status': 'active',\n                        'name': 'd1e7d427-1565-42f6-951d-5508d494d4c8',\n                        'reasonCode': [{\n                                'coding': [{\n                                        'system': 'http://ehealth.sundhed.dk/cs/conditions',\n                                        'code': 'TBD'\n                                    }\n                                ]\n                            }\n                        ],\n                        'managingOrganization': [{\n                                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/69075'\n                            }\n                        ]\n                    },\n                    'practitionerCount': 0\n                }, {\n                    'careTeam': {\n                        'resourceType': 'CareTeam',\n                        'id': '40831',\n                        'meta': {\n                            'versionId': '1',\n                            'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam']\n                        },\n                        'identifier': [{\n                                'id': 'f12b2b87-95d9-487c-b088-457acfa1693f',\n                                'system': 'urn:ietf:rfc:3986'\n                            }\n                        ],\n                        'status': 'active',\n                        'name': 'c572c5ac-bac3-4f9e-b948-795db7563145',\n                        'reasonCode': [{\n                                'coding': [{\n                                        'system': 'http://ehealth.sundhed.dk/cs/conditions',\n                                        'code': 'TBD'\n                                    }\n                                ]\n                            }\n                        ],\n                        'managingOrganization': [{\n                                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/69075'\n                            }\n                        ]\n                    },\n                    'practitionerCount': 0\n                }, {\n                    'careTeam': {\n                        'resourceType': 'CareTeam',\n                        'id': '78765',\n                        'meta': {\n                            'versionId': '1',\n                            'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam']\n                        },\n                        'identifier': [{\n                                'id': '7378e850-aff6-430d-9e86-cca801bf2375',\n                                'system': 'urn:ietf:rfc:3986'\n                            }\n                        ],\n                        'status': 'active',\n                        'name': '3e038dd3-9e80-41e4-9932-8597f8706da4',\n                        'reasonCode': [{\n                                'coding': [{\n                                        'system': 'http://ehealth.sundhed.dk/cs/conditions',\n                                        'code': 'TBD'\n                                    }\n                                ]\n                            }\n                        ],\n                        'managingOrganization': [{\n                                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/69075'\n                            }\n                        ]\n                    },\n                    'practitionerCount': 0\n                }, {\n                    'careTeam': {\n                        'resourceType': 'CareTeam',\n                        'id': '46096',\n                        'meta': {\n                            'versionId': '1',\n                            'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam']\n                        },\n                        'identifier': [{\n                                'id': '37a66140-dc7e-4ea4-9ec7-d0dd91adf7c8',\n                                'system': 'urn:ietf:rfc:3986'\n                            }\n                        ],\n                        'status': 'active',\n                        'name': '311ebab3-d310-44bb-b72b-65bdf74b3729',\n                        'reasonCode': [{\n                                'coding': [{\n                                        'system': 'http://ehealth.sundhed.dk/cs/conditions',\n                                        'code': 'TBD'\n                                    }\n                                ]\n                            }\n                        ],\n                        'managingOrganization': [{\n                                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/69075'\n                            }\n                        ]\n                    },\n                    'practitionerCount': 0\n                }, {\n                    'careTeam': {\n                        'resourceType': 'CareTeam',\n                        'id': '32543',\n                        'meta': {\n                            'versionId': '1',\n                            'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam']\n                        },\n                        'identifier': [{\n                                'id': '3671c951-d20e-4d5c-82ec-fae5ee03821e',\n                                'system': 'urn:ietf:rfc:3986'\n                            }\n                        ],\n                        'status': 'active',\n                        'name': '1f74a06c-8ae1-4b5c-b5ee-49abfd2d28e1',\n                        'reasonCode': [{\n                                'coding': [{\n                                        'system': 'http://ehealth.sundhed.dk/cs/conditions',\n                                        'code': 'TBD'\n                                    }\n                                ]\n                            }\n                        ],\n                        'managingOrganization': [{\n                                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/69075'\n                            }\n                        ]\n                    },\n                    'practitionerCount': 0\n                }\n            ]\n        }\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-schedule-questionnaireresponses"
        },
        "name" : "Schedule questionnare responses",
        "description" : "### Report Contents\nThis report contains a collection of questionnaire responses and related resources\n- Organizations\n- CareTeams\n- PlanDefinitions\n- ActivityDefinitions\n- Questionnaires\n- QuestionnaireResponses\n- Communication\n- ServiceRequestSummary\n### Grouping \nThis report is grouped by Questionnaire. Each group is returned as a FHIR bundle in a separate JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- condition: Filter on CarePlan.addresses.code match\n- period: Filter on QuestionnaireResponse.authored within period\n- plan: Filter on Plan match\n- questionnaire: Filter on ActivityDefinition.composed-of match\n- careteam: Filter on careteam in CarePlan.careteam or EpisodeOfCare.team\n- tag: Filter on tag match\n\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\n### Output\n{\n  'resourceType' : 'Bundle',\n  'id' : 'Questionnaire/44529',\n  'entry' : [ {\n    'fullUrl' : 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/24206/_history/1',\n    'resource' : {\n      'resourceType' : 'PlanDefinition',\n      'id' : '24206',\n      'meta' : {\n        'versionId' : '1',\n        'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition' ]\n      },\n      'extension' : [ {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role',\n        'extension' : [ {\n          'url' : 'reference',\n          'valueReference' : {\n            'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/14291'\n          }\n        }, {\n          'url' : 'role',\n          'valueCodeableConcept' : {\n            'coding' : [ {\n              'system' : 'http://ehealth.sundhed.dk/cs/modifier-role',\n              'code' : 'owner'\n            } ]\n          }\n        } ]\n      } ],\n      'version' : '1.0',\n      'status' : 'active',\n      'action' : [ {\n        'definitionCanonical' : 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/10919'\n      } ]\n    }\n  }, {\n    'fullUrl' : 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/10919/_history/1',\n    'resource' : {\n      'resourceType' : 'ActivityDefinition',\n      'id' : '10919',\n      'meta' : {\n        'versionId' : '1',\n        'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-activitydefinition' ]\n      },\n      'extension' : [ {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy',\n        'valueCodeableConcept' : {\n          'coding' : [ {\n            'system' : 'http://ehealth.sundhed.dk/cs/measurement-sharing-policies',\n            'code' : 'noSharing'\n          } ]\n        }\n      }, {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role',\n        'extension' : [ {\n          'url' : 'reference',\n          'valueReference' : {\n            'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/25403'\n          }\n        }, {\n          'url' : 'role',\n          'valueCodeableConcept' : {\n            'coding' : [ {\n              'system' : 'http://ehealth.sundhed.dk/cs/modifier-role',\n              'code' : 'owner'\n            } ]\n          }\n        } ]\n      } ],\n      'version' : '1.0',\n      'name' : '0ca879ed-678c-4439-aa4a-efc597f92dfb',\n      'status' : 'active',\n      'topic' : [ {\n        'coding' : [ {\n          'system' : 'http://terminology.hl7.org/CodeSystem/definition-topic',\n          'code' : 'treatment'\n        } ]\n      } ],\n      'relatedArtifact' : [ {\n        'type' : 'composed-of',\n        'resource' : 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/44529'\n      } ],\n      'code' : {\n        'coding' : [ {\n          'system' : 'http://ehealth.sundhed.dk/cs/activitydefinition-code',\n          'code' : '273586006'\n        } ]\n      }\n    }\n  }, {\n    'fullUrl' : 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/44529/_history/1',\n    'resource' : {\n      'resourceType' : 'Questionnaire',\n      'id' : '44529',\n      'meta' : {\n        'versionId' : '1',\n        'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire' ]\n      },\n      'extension' : [ {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-type',\n        'valueCodeableConcept' : {\n          'coding' : [ {\n            'system' : 'http://ehealth.sundhed.dk/cs/questionnaire-types',\n            'code' : 'QQ'\n          } ]\n        }\n      }, {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role',\n        'extension' : [ {\n          'url' : 'reference',\n          'valueReference' : {\n            'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/24153'\n          }\n        }, {\n          'url' : 'role',\n          'valueCodeableConcept' : {\n            'coding' : [ {\n              'system' : 'http://ehealth.sundhed.dk/cs/modifier-role',\n              'code' : 'owner'\n            } ]\n          }\n        } ]\n      } ],\n      'version' : '1.0',\n      'name' : '090b990e-046a-4374-b7c6-b08613a41cce',\n      'status' : 'active'\n    }\n  }, {\n    'fullUrl' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/98618/_history/1',\n    'resource' : {\n      'resourceType' : 'Organization',\n      'id' : '98618',\n      'meta' : {\n        'versionId' : '1',\n        'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization' ]\n      },\n      'extension' : [ {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-source',\n        'valueCodeableConcept' : {\n          'coding' : [ {\n            'system' : 'http://ehealth.sundhed.dk/cs/organization-source',\n            'code' : 'manual'\n          } ]\n        }\n      }, {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-synchronizationStatus',\n        'valueCodeableConcept' : {\n          'coding' : [ {\n            'system' : 'http://ehealth.sundhed.dk/cs/organization-synchronization-status',\n            'code' : 'NotSynchronized'\n          } ]\n        }\n      } ],\n      'identifier' : [ {\n        'use' : 'official',\n        'system' : 'urn:oid:2.16.840.1.113883.2.24.1.1',\n        'value' : '11111111',\n        'period' : {\n          'start' : '2023-10-10T14:49:12+02:00'\n        }\n      } ],\n      'active' : false,\n      'name' : 'defaultTestFactory-be16f47b-1f8a-4440-a02e-23da1219b0ca',\n      'partOf' : {\n        'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/22124'\n      }\n    }\n  }, {\n    'fullUrl' : 'https://organization.local.ehealth.sundhed.dk/fhir/CareTeam/87455/_history/1',\n    'resource' : {\n      'resourceType' : 'CareTeam',\n      'id' : '87455',\n      'meta' : {\n        'versionId' : '1',\n        'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam' ]\n      },\n      'identifier' : [ {\n        'system' : 'urn:ietf:rfc:3986',\n        'value' : 'urn:uuid:9658ef5f-019a-4c90-9c41-f3ad14a31777'\n      } ],\n      'status' : 'active',\n      'name' : '1b900db5-09dd-4563-b612-2b81201fab16',\n      'reasonCode' : [ {\n        'coding' : [ {\n          'system' : 'urn:oid:1.2.208.176.2.4',\n          'code' : 'DJ44'\n        } ]\n      } ]\n    }\n  }, {\n    'fullUrl' : 'https://measurement.local.ehealth.sundhed.dk/fhir/QuestionnaireResponse/92491/_history/1',\n    'resource' : {\n      'resourceType' : 'QuestionnaireResponse',\n      'id' : '92491',\n      'meta' : {\n        'versionId' : '1',\n        'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaireresponse' ]\n      },\n      'extension' : [ {\n        'url' : 'http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare',\n        'valueReference' : {\n          'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/22208'\n        }\n      }, {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-resolved-timing',\n        'extension' : [ {\n          'url' : 'serviceRequestVersionId',\n          'valueId' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439/_history/1'\n        }, {\n          'url' : 'start',\n          'valueDateTime' : '2023-10-10T14:49:12+02:00'\n        }, {\n          'url' : 'end',\n          'valueDateTime' : '2023-10-10T14:49:12+02:00'\n        }, {\n          'url' : 'type',\n          'valueCodeableConcept' : {\n            'coding' : [ {\n              'system' : 'http://ehealth.sundhed.dk/cs/resolved-timing-type',\n              'code' : 'Resolved'\n            } ]\n          }\n        } ]\n      } ],\n      'basedOn' : [ {\n        'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439'\n      } ],\n      'questionnaire' : 'https://questionnaire.local.ehealth.sundhed.dk/fhir/Questionnaire/44529',\n      'status' : 'completed',\n      'subject' : {\n        'reference' : 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/64465'\n      },\n      'authored' : '2023-10-10T14:49:12+02:00',\n      'source' : {\n        'reference' : 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/75218'\n      }\n    }\n  }, {\n    'fullUrl' : 'https://patient.local.ehealth.sundhed.dk/fhir/Communication/97180/_history/1',\n    'resource' : {\n      'resourceType' : 'Communication',\n      'id' : '97180',\n      'meta' : {\n        'versionId' : '1',\n        'profile' : [ 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication' ]\n      },\n      'extension' : [ {\n        'url' : 'http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare',\n        'valueReference' : {\n          'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/14233'\n        }\n      }, {\n        'url' : 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-restriction-category',\n        'valueCodeableConcept' : {\n          'coding' : [ {\n            'system' : 'http://ehealth.sundhed.dk/cs/restriction-category',\n            'code' : 'None'\n          } ]\n        }\n      } ],\n      'basedOn' : [ {\n        'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439'\n      } ],\n      'status' : 'in-progress',\n      'category' : [ {\n        'coding' : [ {\n          'system' : 'http://ehealth.sundhed.dk/cs/communication-category',\n          'code' : 'annotation'\n        } ]\n      }, {\n        'coding' : [ {\n          'system' : 'http://ehealth.sundhed.dk/cs/message-category',\n          'code' : 'advice'\n        } ]\n      } ],\n      'subject' : {\n        'reference' : 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/35194'\n      },\n      'topic' : {\n        'coding' : [ {\n          'system' : 'http://terminology.hl7.org/CodeSystem/communication-topic',\n          'code' : 'report-labs'\n        } ]\n      },\n      'sent' : '2023-10-10T14:49:12+02:00',\n      'reasonCode' : [ {\n        'coding' : [ {\n          'system' : 'http://ehealth.sundhed.dk/cs/message-reasonCode',\n          'code' : 'ReminderSubmitMeasurement'\n        } ]\n      } ]\n    }\n  }, {\n    'fullUrl' : 'urn:uuid:57cfd6a7-dd43-4caa-8220-d50c77aebd8b',\n    'resource' : {\n      'resourceType' : 'Parameters',\n      'parameter' : [ {\n        'name' : 'serviceRequestResponseSummary',\n        'part' : [ {\n          'name' : 'serviceRequest',\n          'valueReference' : {\n            'reference' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439'\n          },\n          'part' : [ {\n            'name' : 'condition',\n            'valueCoding' : {\n              'system' : 'urn:oid:1.2.208.176.2.4',\n              'code' : 'DJ44',\n              'display' : 'Kronisk obstruktiv lungesygdom'\n            }\n          }, {\n            'name' : 'episodeOfCareManagingOrganization',\n            'valueReference' : {\n              'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/98618'\n            }\n          }, {\n            'name' : 'episodeOfCarePeriod',\n            'valuePeriod' : {\n              'start' : '1970-01-01T01:00:01+01:00',\n              'end' : '1970-01-01T01:01:40+01:00'\n            }\n          }, {\n            'name' : 'patientIdentifier',\n            'valueIdentifier' : {\n              'system' : 'urn:oid:1.2.208.176.1.2',\n              'value' : '0101010001'\n            }\n          }, {\n            'name' : 'statusHistory',\n            'part' : [ {\n              'name' : 'statusPeriod',\n              'part' : [ {\n                'name' : 'status',\n                'valueCoding' : {\n                  'system' : 'http://hl7.org/fhir/request-status',\n                  'code' : 'draft'\n                }\n              }, {\n                'name' : 'period',\n                'valuePeriod' : {\n                  'start' : '2023-10-02T12:49:12+00:00',\n                  'end' : '2023-10-03T12:49:12+00:00'\n                }\n              } ]\n            }, {\n              'name' : 'statusPeriod',\n              'part' : [ {\n                'name' : 'status',\n                'valueCoding' : {\n                  'system' : 'http://hl7.org/fhir/request-status',\n                  'code' : 'active'\n                }\n              }, {\n                'name' : 'period',\n                'valuePeriod' : {\n                  'start' : '2023-10-03T12:49:12+00:00',\n                  'end' : '2023-10-04T12:49:12+00:00'\n                }\n              } ]\n            }, {\n              'name' : 'statusPeriod',\n              'part' : [ {\n                'name' : 'status',\n                'valueCoding' : {\n                  'system' : 'http://hl7.org/fhir/request-status',\n                  'code' : 'on-hold'\n                }\n              }, {\n                'name' : 'period',\n                'valuePeriod' : {\n                  'start' : '2023-10-04T12:49:12+00:00',\n                  'end' : '2023-10-05T12:49:12+00:00'\n                }\n              } ]\n            }, {\n              'name' : 'statusPeriod',\n              'part' : [ {\n                'name' : 'status',\n                'valueCoding' : {\n                  'system' : 'http://hl7.org/fhir/request-status',\n                  'code' : 'active'\n                }\n              }, {\n                'name' : 'period',\n                'valuePeriod' : {\n                  'start' : '2023-10-05T12:49:12+00:00',\n                  'end' : '2023-10-08T12:49:12+00:00'\n                }\n              } ]\n            }, {\n              'name' : 'statusPeriod',\n              'part' : [ {\n                'name' : 'status',\n                'valueCoding' : {\n                  'system' : 'http://hl7.org/fhir/request-status',\n                  'code' : 'on-hold'\n                }\n              }, {\n                'name' : 'period',\n                'valuePeriod' : {\n                  'start' : '2023-10-08T12:49:12+00:00'\n                }\n              } ]\n            } ]\n          }, {\n            'name' : 'involvedCareTeams',\n            'part' : [ {\n              'name' : 'careTeam',\n              'valueReference' : {\n                'reference' : 'https://organization.local.ehealth.sundhed.dk/fhir/CareTeam/87455'\n              }\n            } ]\n          }, {\n            'name' : 'responses',\n            'part' : [ {\n              'name' : 'response',\n              'part' : [ {\n                'name' : 'occurrence',\n                'part' : [ {\n                  'name' : 'serviceRequestVersionId',\n                  'valueId' : 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/79439/_history/1'\n                }, {\n                  'name' : 'start',\n                  'valueDateTime' : '2023-10-10T14:49:12+02:00'\n                }, {\n                  'name' : 'end',\n                  'valueDateTime' : '2023-10-10T14:49:12+02:00'\n                }, {\n                  'name' : 'type',\n                  'valueCodeableConcept' : {\n                    'coding' : [ {\n                      'system' : 'http://ehealth.sundhed.dk/cs/resolved-timing-type',\n                      'code' : 'Resolved'\n                    } ]\n                  }\n                } ]\n              }, {\n                'name' : 'questionnaireResponse',\n                'valueReference' : {\n                  'reference' : 'https://measurement.local.ehealth.sundhed.dk/fhir/QuestionnaireResponse/92491'\n                }\n              }, {\n                'name' : 'submitted',\n                'valueDateTime' : '2023-10-10T12:49:12+00:00'\n              } ]\n            } ]\n          }, {\n            'name' : 'communications',\n            'part' : [ {\n              'name' : 'communication',\n              'valueReference' : {\n                'reference' : 'https://patient.local.ehealth.sundhed.dk/fhir/Communication/97180'\n              }\n            } ]\n          } ]\n        } ]\n      } ]\n    }\n  } ]\n}",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-schedule-ssl-orders"
        },
        "name" : "Schedule ssl orders",
        "description" : "### Report Contents\nThis report contains SSL Orders\n- OrderDetails\n- OrderLines\n- TraceLines\n### Grouping \nOrder. Each Order is returned in a single JSon file.\n### Parameters\n- organization: Filter on Order.buyer\n- period: Filter on TraceLine.timestamp\n- seller: Filter on Order.seller\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nAll returned objects are SSL resources. See the SSL API description for details\n\n    {\n        'OrderDetails': {\n            'order': {\n                'id': 'https://ssl-order.local.ehealth.sundhed.dk/v1/order/ORDER',\n                'threadId': null,\n                'identifiers': null,\n                'status': null,\n                'priority': null,\n                'notes': null,\n                'buyer': 'https://ssl-order.local.ehealth.sundhed.dk/v1/party/BUYER',\n                'seller': 'https://ssl-order.local.ehealth.sundhed.dk/v1/party/SELLER',\n                'sellerDeliveryContactEmail': null,\n                'carePlanRef': null,\n                'carePlanTitle': null,\n                'earliestDeliveryDate': null,\n                'latestDeliveryDate': null,\n                'receiver': null\n            },\n            'orderLines': [{\n                    'id': 'https://ssl-order.local.ehealth.sundhed.dk/v1/order-line/ORDERLINE',\n                    'order': 'https://ssl-order.local.ehealth.sundhed.dk/v1/order/ORDER',\n                    'status': null,\n                    'item': null,\n                    'agreedDate': null,\n                    'device': null\n                }\n            ],\n            'traceLines': [{\n                    'id': 'https://ssl-order.local.ehealth.sundhed.dk/v1/order/ORDER/1',\n                    'timestamp': '2019-12-24T18:00:00Z',\n                    'createdByOrganization': null,\n                    'createdByUser': null,\n                    'text': null,\n                    'supplementaryText': null,\n                    'order': 'https://ssl-order.local.ehealth.sundhed.dk/v1/order/ORDER',\n                    'orderLine': null,\n                    'statusChange': null\n                }\n            ]\n        }\n    }",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-search-measurements"
        },
        "name" : "Search measurements",
        "description" : "The search-measurements operation searches for bundles of related resources having Observations, Media or QuestionnaireResponses matching the search criteria.\n\n\n### Parameter description\n- patient: Find resource(s) referring the specified patient - Reference(eHealth Patient).\n- episodeOfCare: Find resource(s) referring the specified episode of care - Reference(eHealth EpisodeOfCare).\n- device: Find resource(s) referring the specified device - Reference(eHealth Device | eHealth DeviceMetric).\n- period: Resource(s) must have either an instant or time period within or overlapping the given period. The used instant/time period varies with resource as follows: Element effective for eHealth Observation; Element authored for eHealth QuestionnaireResponse; Element occurrence for eHealth Media.\n- based-on: Resources(s) must be based on any of the specified procedure requests - Reference(eHealth ServiceRequest).\n- _tag: When specified, resource(s) must have at least one of the specified tags in meta data - for instance a Coding(ehealth-system CodeSystem) or on token form: http://ehealth.sundhed.dk/cs/ehealth-system|xa. Note that the _tag functions as an optional filter, not as a selection criteria in the way the other parameters work.\n\n\n\"period\" must always be specified.\n\nAdditionally at least \"patient\" or \"episodeOfCare\" must be specified.\n\n### Output description\n\nThe result of this operation will return a Bundle with a list of nested Bundles having resources matching the search parameters.\n\nEach of the nested bundles will contain the full set of related eHealth Observation, eHealth Media, eHealth QuestionnaireResponse and eHealth Provenance resources.\n\nIf a eHealth QuestionnaireResponse is part of the nested bundle the referenced eHealth Questionnaire will also be included in the nested bundle.\n\nRelated resources are the set of resources created by a single invocation of the submit-measurement operation.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-search-measurements-bundle-limit"
        },
        "name" : "Search measurements bundle limit",
        "description" : "The search-measurements-bundle-limit operation searches for a number of bundles of related resources having Observations, Media or QuestionnaireResponses matching the search criteria.\n\n\n### Parameter description\n- patient: Find resource(s) referring the specified patient - Reference(eHealth Patient).\n- episodeOfCare: Find resource(s) referring the specified episode of care - Reference(eHealth EpisodeOfCare).\n- count: The number of bundles to return, max allowed value is 100 - Integer.\n- start: Based on the effective time of measurement, please see <a href='https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-observation-definitions.html#key_Observation.effective[x]'>Observation.effective[x]</a> , <a href='https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-questionnaireresponse.html#effective-period'>QuestionnaireResponse.effective-period</a> , and <a href='https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-media-definitions.html#key_Media.created[x]'>Media.created[x]</a>. If QuestionnaireResponse.effectivePeriod is missing, authored is used instead. If provided, the operation will search for observation, media and QuestionnaireResponse resource(s) with a clinical effective time after this time. The result bundles will be sorted in ascending order - DateTime.\n- end: Based on the effective time of measurement, please see <a href='https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-observation-definitions.html#key_Observation.effective[x]'>Observation.effective[x]</a> , <a href='https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-questionnaireresponse.html#effective-period'>QuestionnaireResponse.effective-period</a> , and <a href='https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-media-definitions.html#key_Media.created[x]'>Media.created[x]</a>. If QuestionnaireResponse.effectivePeriod is missing, authored is used instead. If provided, the operation will search for observation, media and QuestionnaireResponse resource(s) with a clinical effective time before this time. The result bundles will be sorted in descending order - DateTime.\n- based-on: Resources(s) must be based on any of the specified service requests - Reference(eHealth ServiceRequest).\n- _tag: When specified, resource(s) must have at least one of the specified tags in meta data - for instance a Coding(ehealth-system CodeSystem) or on token form: http://ehealth.sundhed.dk/cs/ehealth-system|xa. Note that the _tag functions as an optional filter, not as a selection criteria in the way the other parameters work.\n\n\nOne of either \"start\" or \"end\", along with the \"count\" parameter must always be specified.\n\nAdditionally at least \"patient\" or \"episodeOfCare\" or \"based-on\" must be specified.\n\n### Output description\n\nThe result of this operation returns a Bundle with a list of nested Bundles having resources matching the search parameters. The number of nested Bundles depends on the count parameter.\n\nEach of the nested bundles contains the full set of related eHealth Observation, eHealth Media, eHealth QuestionnaireResponse and eHealth Provenance resources, from the same submission request.\n\nRelated resources are the set of resources created by a single invocation of the submit-measurement operation.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-communication-senderCareTeam"
        },
        "name" : "Sender careteam",
        "description" : "CareTeam that is a sender of a Communication",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-media-series-id"
        },
        "name" : "Series ID",
        "description" : "Series identifier.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-servicerequest-statusHistory"
        },
        "name" : "ServiceRequest status history",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-servicerequest-statusSchedule"
        },
        "name" : "ServiceRequest status schedule",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-measurement-sharing-approval-policies"
        },
        "name" : "Sharing Approval Policies",
        "description" : "Sharing approval policies",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-measurement-sharing-approval-policies"
        },
        "name" : "Sharing Approval Policies",
        "description" : "Policies of approval for sharing measurement submissions with national registers such as KIH.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-sharingApprovalPolicy"
        },
        "name" : "Sharing Approval Policy",
        "description" : "Policy for approval of sharing a resource with national data banks",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-sharingPolicy"
        },
        "name" : "Sharing policy",
        "description" : "Policy for sharing a resource with national data banks",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-questionnaire-shortText"
        },
        "name" : "Short text",
        "description" : "Short text for questionnaires",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-situation-quality"
        },
        "name" : "Situation Quality",
        "description" : "Codes stating the quality of a measurement situation",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-situation-quality"
        },
        "name" : "Situation Quality",
        "description" : "Value set of hierarchical codes stating the quality of a measurement situation.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-questionnaire-sliderStepValueDecimal"
        },
        "name" : "Slider Step-value Decimal",
        "description" : "Defines a decimal number step-value for the slider in the questionnaire.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth.sundhed.dk-snomed.info-sct-supplement"
        },
        "name" : "SNOMED CT Code System Supplement",
        "description" : "SNOMED Clinical Terms",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-sor-organization-specialty"
        },
        "name" : "SOR Organization Specialty",
        "description" : "Organization specialties specific for organizations from Sor",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-sor-organization-type"
        },
        "name" : "SOR Organization Type",
        "description" : "Organization types specific for organizations from Sor",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/sor-organization-specialty"
        },
        "name" : "SorOrganizationSpecialty",
        "description" : "Value set used for indicating the specialty for organizations from Sor",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-sor-organization-type"
        },
        "name" : "SorOrganizationType",
        "description" : "Value set used for indicating the organization type for organizations from Sor",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-device-service-types"
        },
        "name" : "SSL Service Types",
        "description" : "SSL service types",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-document-sharing-state"
        },
        "name" : "State of the document sharing",
        "description" : "Where in the sharing process the document is, and the reason why",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-status"
        },
        "name" : "Status",
        "description" : "The current status",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-episodeofcare-statusschedule"
        },
        "name" : "Status schedule",
        "description" : "Scheduled status change",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-submit-measurement"
        },
        "name" : "Submit measurement",
        "description" : "The submit-measurement operation provides a single measurement in the form of a Bundle of Observation, QuestionnaireResponse and Media for storage and, subsequently, further processing in the eHealth Infrastructure. A Provenance resource is implicitly created by the infrastructure referencing input Bundle resources as target, thereby relating the resources that were submitted. \n\nMedia resource inline content in `content.data` will be stored outside the resource, and the `content.url` for retrieval is set on the resource. Image content is anonymized by removing sensitive metadate before storage. Image content is processed to generate thumbnail representations in the thumbnail element. \n\n\n### Parameter description\nmeasurement: Bundle containing:\n- 0..* Observation (ehealth-observation profile)\n- 0..* QuestionnaireResponse (ehealth-questionnaireresponse profile)\n- 0..* Media (ehealth-media profile)\n- 0..* Provenance (ehealth-provenance profile). Each Provenance (which is intended for capturing reuse of measurement(s) – as described in the eHealth Observation profile introduction) must refer to other resources in the Bundle as target in the format \"urn:oid:<the oid>\" or \"urn:uuid:<the uuid>.\".\n\nAll resources in the Bundle must refer to the same Patient and EpisodeOfCare.\nAll measurement resources in the Bundle must have status either `completed` or `final` (`completed` in case of Media/QuestionnaireResponse and `final` in case of Observation).\nAll resources in the Bundle as well as the created Provenance will receive any missing system tags (ehealth-system CodeSystem) provided by the referenced EpisodeOfCare.\nThe request will be denied if any resource in the Bundle contains a system tag, which is not present on the referenced EpisodeOfCare\n\n\n### Output description\nThe returned Bundle contains references to the stored input resources where the id has been substituted.\n\neHealth infrastructure will substitute the id when saving the resources in a single transaction.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/CarePlan-i-suggest-care-teams"
        },
        "name" : "Suggest care teams",
        "description" : "Suggest care teams matching the conditions required by the care plan on either a regional or a municipality level. The suggested care teams has reason codes matching all the conditions addressed by the care plan and has a managing organization matching the input region code or municipality code. One of region code or municipality code must be input. If both region code and municipality code is input, then the municipality code is ignored. Return a bundle with matching care teams and their managing organizations.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/urn-oid-1.2.208.176.2.4"
        },
        "name" : "Sundhedsvæsenets klassifikationssystem (SKS)",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "NamingSystem"
          }
        ],
        "reference" : {
          "reference" : "NamingSystem/sor"
        },
        "name" : "Sundhedsvæsenets Organisationsregister (SOR)",
        "description" : "SOR is provided by the Danish Health Data Authority under the Danish Ministry of Health. The register holds organizations within the Danish health sector, their geographical and virtual addresses as well as codes for their identification and for EDI-communication. Danish Health Data Authority is responsible for issuing and publishing codes to identify organizations across health care sectors and related public and private services. SOR includes organizational data on hospitals, the primary care sector (physiotherapists, general practitioners, dentists etc.) and municipal health service organizations as well as non-health care organizations that need to be able to receive data from the former.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-device-suppliers"
        },
        "name" : "Suppliers",
        "description" : "Suppliers of different kinds. E.g device suppliers, support suppliers, training suppliers, etc.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-health-conditions"
        },
        "name" : "Sygdoms- og diagnosekoder",
        "description" : "Health Condition Codes",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CapabilityStatement"
          }
        ],
        "reference" : {
          "reference" : "CapabilityStatement/task"
        },
        "name" : "task",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-task-category"
        },
        "name" : "Task category",
        "description" : "Category of task.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-task-category"
        },
        "name" : "Task Category",
        "description" : "Task Category",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-task-category"
        },
        "name" : "Task Category",
        "description" : "Value set for task category.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-task-handover-roles"
        },
        "name" : "Task Handover Roles",
        "description" : "Task Handover Roles",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-task-responsible"
        },
        "name" : "Task responsible",
        "description" : "Individual organization or Device currently responsible for task execution.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-teamHistory"
        },
        "name" : "Team history",
        "description" : "History of assigned careTeam",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-teamschedule"
        },
        "name" : "Team schedule",
        "description" : "Scheduled team change",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-organization-telecomCustodian"
        },
        "name" : "Telecom Custodian",
        "description" : "Custodian of this ContactPoint.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-organization-telecomSystem"
        },
        "name" : "Telecom System",
        "description" : "Type of communications system required to make use of the contact point: phone | fax | email | pager | url | sms | ean | other",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-organization-telecomValue"
        },
        "name" : "Telecom Value",
        "description" : "The actual contact point details (i.e. phone number or email address)",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-devicemetric-templateQualities"
        },
        "name" : "Template qualities",
        "description" : "Device quality default settings for an initial, a degraded, and an overridden device quality.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CapabilityStatement"
          }
        ],
        "reference" : {
          "reference" : "CapabilityStatement/terminology"
        },
        "name" : "terminology",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-thread-id"
        },
        "name" : "Thread id",
        "description" : "A logical id identifying a set of messages, which are grouped in a thread. Can be supplied by the client, eg. as a UUID",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "SearchParameter"
          }
        ],
        "reference" : {
          "reference" : "SearchParameter/ehealth-communication-search-threadId"
        },
        "name" : "threadId",
        "description" : "Search parameter for finding communication based on thread id",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-thumbnail-size"
        },
        "name" : "Thumbnail Size Category",
        "description" : "Thumbnail size is a code system for the sizes of low resolution media representations.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-thumbnail-size-category"
        },
        "name" : "Thumbnail Size Category",
        "description" : "Thumbnail size is a value set with the available sizes of low resolution media representations.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-thumbnail-status"
        },
        "name" : "Thumbnail status",
        "description" : "Thumbnail status is a code system for the status of low resolution media representations.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-thumbnail-status"
        },
        "name" : "Thumbnail Status",
        "description" : "Thumbnail status is a value set for the status of low resolution media representations.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-condition-conditions"
        },
        "name" : "Tilstandskoder",
        "description" : "Condition Codes",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-basic-title"
        },
        "name" : "Title",
        "description" : "Name for this (human friendly)",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-title"
        },
        "name" : "Title",
        "description" : "The title of the message",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-topic-type"
        },
        "name" : "Topic Type",
        "description" : "Topic type",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-topic-type"
        },
        "name" : "Topic Type",
        "description" : "Topic types.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-transform-from-APD"
        },
        "name" : "Transform from APD",
        "description" : "Transforms a DK-HL7 Appointment Document (APD) XML document to a FHIR Appointment (ehealth-appointment profile) resource. The input FHIR DocumentReference (ehealth-documentreference profile) contains the APD XML document. The caller must ensure that the APD XML document is valid and adheres to the DK-HL7 Appointment Document profile. The returned FHIR Bundle contains a FHIR Composition (ehealth-composition profile) resource referencing a FHIR Appointment (ehealth-appointment profile) resource.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-transform-from-PHMR"
        },
        "name" : "Transform from PHMR",
        "description" : "Transforms a DK-HL7 Personal Health Monitoring Report (PHMR) XML document to FHIR Observation (ehealth-observation profile) resource. The input FHIR DocumentReference contains the PHMR XML document adhering to the DK-HL7 Personal Health Monitoring Report profile The returned FHIR Bundle contains a FHIR Composition (ehealth-composition profile) resource referencing.one or more FHIR Observation (ehealth-observation profile) resources and referenced resources such as FHIR Organization.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-transform-from-QFDD"
        },
        "name" : "Transform from QFDD",
        "description" : "Transforms the DK-HL7 Questionnaire Form Definition Document (QFDD) to an eHealth Questionnaire resource. The input FHIR DocumentReference contains QFDD XML for the DK-HL7 Questionnaire Form Definition Document. The returned Bundle contains the eHealth Questionnaire and Composition resource which reference the returned eHealth Questionnaire.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-transform-from-QRD"
        },
        "name" : "Transform from QRD",
        "description" : "Transforms a DK-HL7 Questionnaire Response Document (QRD) XML document to a FHIR QuestionnaireResponse (ehealth-questionnaireresponse profile) resource. The input FHIR DocumentReference contains the QRD XML document adhering to the DK-HL7 Questionnaire Response Document profile. The returned FHIR Bundle contains FHIR Composition (ehealth-composition profile) resource referencing a FHIR QuestionnaireResponse (ehealth-documentreference profile) resource.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-transform-from-QRD-based-on-questionnaire"
        },
        "name" : "Transform from QRD based on FHIR Questionnaire",
        "description" : "Transforms a DK-HL7 Questionnaire Response Document (QRD) XML document to a FHIR QuestionnaireResponse (ehealth-questionnaireresponse profile) resource. The input bundle must contain the QRD XML document adhering to the DK-HL7 Questionnaire Response Document profile. And a FHIR Questionnaire resource. The returned FHIR Bundle contains FHIR Composition (ehealth-composition profile) resource referencing a FHIR QuestionnaireResponse (ehealth-documentreference profile) resource.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-transform-to-APD"
        },
        "name" : "Transform to APD",
        "description" : "Transforms a FHIR Appointment (ehealth-appointment profile) resource to a DK-HL7 Appointment Document (APD) XML document. The input FHIR Bundle contains a FHIR Composition (ehealth-composition profile) resource referencing a FHIR Appointment (ehealth-appointment profile) resource and referenced resources such as FHIR Organization. The returned FHIR DocumentReference contains the APD XML document adhering to the DK-HL7 Appointment Document profile.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-transform-to-PHMR"
        },
        "name" : "Transform to PHMR",
        "description" : "Transforms a FHIR Observation (ehealth-observation profile) resource to a DK-HL7 Personal Health Monitoring Report (PHMR) XML document. The input FHIR Bundle contains a FHIR Composition (ehealth-composition profile) resource referencing one or more FHIR Observation (ehealth-observation profile) resources and referenced resources such as FHIR Organization. The returned FHIR DocumentReference contains the PHMR XML document adhering to the DK-HL7 Personal Health Monitoring Report profile.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-transform-to-QFDD"
        },
        "name" : "Transform to QFDD",
        "description" : "Transforms an eHealth Questionnaire resource to the DK-HL7 Questionnaire Form Definition Document (QFDD). The input Bundle contains an eHealth Questionnaire and Composition resource which reference the returned eHealth Questionnaire. The returned Bundle in case of no validation errors contains the FHIR DocumentReference containing the QFDD XML for the DK-HL7 Questionnaire Form Definition Document and an OperationOutcome will possible warnings. In case of validation errors the Bundle will only contain an OperationOutcome with the validation errors/warnings.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-transform-to-QRD"
        },
        "name" : "Transform to QRD",
        "description" : "Transforms a FHIR QuestionnaireResponse (ehealth-questionnaireresponse profile) resource to a DK-HL7 Questionnaire Response Document (QRD) XML document. The input FHIR Bundle contains FHIR Composition (ehealth-composition profile) resource referencing a FHIR QuestionnaireResponse resource. a FHIR Questionnaire resource. The bundle must also contain a FHIR DocumentReference containing a QFDD xml file (base64 encoded)The returned FHIR DocumentReference contains the QRD XML document adhering to the DK-HL7 Questionnaire Response Document profile.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/Organization-i-traverse-to-sor"
        },
        "name" : "Traverse to SOR",
        "description" : "Traverse upforwards to the first SOR organization\nHttp response code 404 will be returned if no related SOR organization could be found",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-trigger-behavior"
        },
        "name" : "Trigger Behavior",
        "description" : "Trigger behavior",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-triggerCondition"
        },
        "name" : "Trigger Condition",
        "description" : "Conditions for a triggering action to be met for other action to be triggered.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-trigger-enablement-code"
        },
        "name" : "Trigger Enablement Code",
        "description" : "Trigger Enablement Code",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-trigger-enablement-code"
        },
        "name" : "Trigger Enablement Code",
        "description" : "ServiceRequest trigger enablement value set.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-trigger-enablement-code"
        },
        "name" : "triggerEnablementCode",
        "description" : "Controls whether this ServiceRequest will react to trigger conditions expressed in other activities of the plan.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/conceptmap-ucum-to-printsymbol"
        },
        "name" : "UCUM code to PrintSymbol mapping",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-ucum-printsymbol-supplement"
        },
        "name" : "UCUM printSymbol supplement",
        "description" : "UCUM printSymbol supplement",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-ucum-printsymbol-supplement"
        },
        "name" : "UCUM printSymbol supplement",
        "description" : "UCUM printSymbol supplement",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/ehealth-patient-skrs-update"
        },
        "name" : "Update Patient from KRS",
        "description" : "This operation is used when batch updates on patient information is available from the national service platform. The operation is used by internal components of the eHealth Infrastructure.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-upload-QFDD"
        },
        "name" : "Upload QFDD",
        "description" : "Uploads an DK-HL7 Questionnaire Form Definition Document (QFDD). The input FHIR DocumentReference must be of type QFDD (74468-0) and the status set to current. Include an attachment which contains the base64 encoded QFDD XML document with contentType application/xml. The QFDD XML document must contain a unique id which is used as the the masterIdentifier in the DocumentReference. The returned FHIR DocumentReference contains a masterIdentifier, a type and the description all pulled from the attachment.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "OperationDefinition"
          }
        ],
        "reference" : {
          "reference" : "OperationDefinition/-s-upload-external-code-system"
        },
        "name" : "upload-external-code-system",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-usage"
        },
        "name" : "Usage",
        "description" : "Description for clinicians",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-media-usage-mode"
        },
        "name" : "Usage mode",
        "description" : "Usage mode of the media.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-usage-quality"
        },
        "name" : "Usage Quality",
        "description" : "Quality codes for usage or operating of measuring device",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-usage-quality"
        },
        "name" : "Usage Quality",
        "description" : "Value set of hierarchical codes stating the quality of the user's operation of a device/ability to qualify questionnaire answers.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-useContext"
        },
        "name" : "useContext",
        "description" : "The context that the content is intended to support",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/v3-TimingEvent"
        },
        "name" : "v3 Code System TimingEvent",
        "description" : "**** MISSING DEFINITIONS ****",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-version"
        },
        "name" : "Version",
        "description" : "Business version",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Appointment"
          }
        ],
        "reference" : {
          "reference" : "Appointment/videoappointment01"
        },
        "name" : "videoappointment01",
        "description" : "Forundersøgelse",
        "exampleCanonical" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-videoappointment"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-view-for"
        },
        "name" : "View for",
        "description" : "The valueset matching the view",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-view-for-type"
        },
        "name" : "View For Type",
        "description" : "View for types",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-clinicalimpression-viewInvestigationItem"
        },
        "name" : "View investigation item",
        "description" : "Investigation item for View resources so they can be approved.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-view-type"
        },
        "name" : "View type",
        "description" : "Ehealth view type",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ehealth-view-type"
        },
        "name" : "View Type",
        "description" : "View types",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ehealth-view-type"
        },
        "name" : "View types",
        "description" : "View types",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ehealth-vmr-uri"
        },
        "name" : "VMR URI",
        "description" : "Virtual Meeting Room URI that can be used in eg. webRTC clients. Is provided by the service, not the client, and may not be updated.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "NamingSystem"
          }
        ],
        "reference" : {
          "reference" : "NamingSystem/ydernummer"
        },
        "name" : "Ydernummer",
        "description" : "The Danish Health Authority and Danish Regions can identify doctors' names etc. via the provider number (\"ydernummer\"). The different groups of doctors (general practitioners, ear specialists, eye specialists, etc.) have their own provider number range. Multiple doctors in the same practice will often have the same provider number. Only doctors without a provider number use the special out-of-hours doctor numbers.Provider numbers can change over time. A provider number may be assigned to a doctor who quits or retires, after which the provider number becomes available and can later be assigned to another doctor.",
        "exampleBoolean" : false
      }
    ],
    "page" : {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "toc.html"
        }
      ],
      "nameUrl" : "toc.html",
      "title" : "Table of Contents",
      "generation" : "html",
      "page" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "index.html"
            }
          ],
          "nameUrl" : "index.html",
          "title" : "Home",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "changelog.html"
            }
          ],
          "nameUrl" : "changelog.html",
          "title" : "Changelog",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "downloads.html"
            }
          ],
          "nameUrl" : "downloads.html",
          "title" : "Downloads",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "ehealth-documentreference-search.html"
            }
          ],
          "nameUrl" : "ehealth-documentreference-search.html",
          "title" : "Ehealth Documentreference Search",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "error-messages.html"
            }
          ],
          "nameUrl" : "error-messages.html",
          "title" : "Error Messages",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "event-messages.html"
            }
          ],
          "nameUrl" : "event-messages.html",
          "title" : "Event Messages",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "example-operations.html"
            }
          ],
          "nameUrl" : "example-operations.html",
          "title" : "Example Operations",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "GET_apply_search.html"
            }
          ],
          "nameUrl" : "GET_apply_search.html",
          "title" : "GET Apply Search",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "guidance.html"
            }
          ],
          "nameUrl" : "guidance.html",
          "title" : "Guidance",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "operations.html"
            }
          ],
          "nameUrl" : "operations.html",
          "title" : "Operations",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_apply.html"
            }
          ],
          "nameUrl" : "POST_apply.html",
          "title" : "POST Apply",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_Binary_retrieve-document.html"
            }
          ],
          "nameUrl" : "POST_Binary_retrieve-document.html",
          "title" : "POST Binary Retrieve Document",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_Bundle_retrieve-and-transform-APD.html"
            }
          ],
          "nameUrl" : "POST_Bundle_retrieve-and-transform-APD.html",
          "title" : "POST Bundle Retrieve and Transform APD",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_Bundle_retrieve-and-transform-PHMR.html"
            }
          ],
          "nameUrl" : "POST_Bundle_retrieve-and-transform-PHMR.html",
          "title" : "POST Bundle Retrieve and Transform PHMR",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_Bundle_retrieve-and-transform-QRD.html"
            }
          ],
          "nameUrl" : "POST_Bundle_retrieve-and-transform-QRD.html",
          "title" : "POST Bundle Retrieve and Transform QRD",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_CarePlan_suggest-care-teams.html"
            }
          ],
          "nameUrl" : "POST_CarePlan_suggest-care-teams.html",
          "title" : "POST Care Plan Suggest Care Teams",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_CarePlan_update-care-teams.html"
            }
          ],
          "nameUrl" : "POST_CarePlan_update-care-teams.html",
          "title" : "POST Care Plan Update Care Teams",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_ClinicalImpression_set-measurement-validity.html"
            }
          ],
          "nameUrl" : "POST_ClinicalImpression_set-measurement-validity.html",
          "title" : "POST Clinical Impression Set Measurement Validity",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_create-episode-of-care.html"
            }
          ],
          "nameUrl" : "POST_create-episode-of-care.html",
          "title" : "POST Create Episode of Care",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_DocumentReference_deprecate-document.html"
            }
          ],
          "nameUrl" : "POST_DocumentReference_deprecate-document.html",
          "title" : "POST Document Reference Deprecate Document",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_EpisodeOfCare_is-context-allowed.html"
            }
          ],
          "nameUrl" : "POST_EpisodeOfCare_is-context-allowed.html",
          "title" : "POST Episode Of Care Is Context Allowed",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_EpisodeOfCare_update-care-teams.html"
            }
          ],
          "nameUrl" : "POST_EpisodeOfCare_update-care-teams.html",
          "title" : "POST Episode Of Care Update Care Teams",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_execute-patient-usage-stats.html"
            }
          ],
          "nameUrl" : "POST_execute-patient-usage-stats.html",
          "title" : "POST Execute Patient Usage Stats",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_execute-questionnaireresponses.html"
            }
          ],
          "nameUrl" : "POST_execute-questionnaireresponses.html",
          "title" : "POST Execute Questionnaireresponses",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_fetch-careplan-and-episode-of-care-stats.html"
            }
          ],
          "nameUrl" : "POST_fetch-careplan-and-episode-of-care-stats.html",
          "title" : "POST Fetch Careplan and Episode of Care Stats",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_fetch-careplan-customization-stats.html"
            }
          ],
          "nameUrl" : "POST_fetch-careplan-customization-stats.html",
          "title" : "POST Fetch Careplan Customization Stats",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_fetch-careplan-duration-stats.html"
            }
          ],
          "nameUrl" : "POST_fetch-careplan-duration-stats.html",
          "title" : "POST Fetch Careplan Duration Stats",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_fetch-careplans-by-patient.html"
            }
          ],
          "nameUrl" : "POST_fetch-careplans-by-patient.html",
          "title" : "POST Fetch Careplans by Patient",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_fetch-careteam-stats.html"
            }
          ],
          "nameUrl" : "POST_fetch-careteam-stats.html",
          "title" : "POST Fetch Careteam Stats",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_fetch-measurement-stats.html"
            }
          ],
          "nameUrl" : "POST_fetch-measurement-stats.html",
          "title" : "POST Fetch Measurement Stats",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_fetch-patient-devices.html"
            }
          ],
          "nameUrl" : "POST_fetch-patient-devices.html",
          "title" : "POST Fetch Patient Devices",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_fetch-patient-gdpr.html"
            }
          ],
          "nameUrl" : "POST_fetch-patient-gdpr.html",
          "title" : "POST Fetch Patient Gdpr",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_fetch-patient-usage-stats.html"
            }
          ],
          "nameUrl" : "POST_fetch-patient-usage-stats.html",
          "title" : "POST Fetch Patient Usage Stats",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_fetch-practitioner-gdpr.html"
            }
          ],
          "nameUrl" : "POST_fetch-practitioner-gdpr.html",
          "title" : "POST Fetch Practitioner Gdpr",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_fetch-practitioner-stats.html"
            }
          ],
          "nameUrl" : "POST_fetch-practitioner-stats.html",
          "title" : "POST Fetch Practitioner Stats",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_fetch-questionnaireresponses.html"
            }
          ],
          "nameUrl" : "POST_fetch-questionnaireresponses.html",
          "title" : "POST Fetch Questionnaireresponses",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_fetch-ssl-orders.html"
            }
          ],
          "nameUrl" : "POST_fetch-ssl-orders.html",
          "title" : "POST Fetch Ssl Orders",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_get-patient-procedures.html"
            }
          ],
          "nameUrl" : "POST_get-patient-procedures.html",
          "title" : "POST Get Patient Procedures",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_get-patient-procedures-AT.html"
            }
          ],
          "nameUrl" : "POST_get-patient-procedures-AT.html",
          "title" : "POST Get Patient Procedures AT",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_get-report-job-status.html"
            }
          ],
          "nameUrl" : "POST_get-report-job-status.html",
          "title" : "POST Get Report Job Status",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_import-organizations.html"
            }
          ],
          "nameUrl" : "POST_import-organizations.html",
          "title" : "POST Import Organizations",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_Library_evaluate.html"
            }
          ],
          "nameUrl" : "POST_Library_evaluate.html",
          "title" : "POST Library Evaluate",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_mark-all-resources-for-reindexing.html"
            }
          ],
          "nameUrl" : "POST_mark-all-resources-for-reindexing.html",
          "title" : "POST Mark All Resources for Reindexing",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_migrate.html"
            }
          ],
          "nameUrl" : "POST_migrate.html",
          "title" : "POST Migrate",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_migrate-list.html"
            }
          ],
          "nameUrl" : "POST_migrate-list.html",
          "title" : "POST Migrate List",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_Organization_get-general-practitioner-info.html"
            }
          ],
          "nameUrl" : "POST_Organization_get-general-practitioner-info.html",
          "title" : "POST Organization Get General Practitioner Info",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_persist-login.html"
            }
          ],
          "nameUrl" : "POST_persist-login.html",
          "title" : "POST Persist Login",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_PlanDefinition_apply.html"
            }
          ],
          "nameUrl" : "POST_PlanDefinition_apply.html",
          "title" : "POST Plan Definition Apply",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_PlanDefinition_export.html"
            }
          ],
          "nameUrl" : "POST_PlanDefinition_export.html",
          "title" : "POST Plan Definition Export",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_PlanDefinition_import.html"
            }
          ],
          "nameUrl" : "POST_PlanDefinition_import.html",
          "title" : "POST Plan Definition Import",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_reindex.html"
            }
          ],
          "nameUrl" : "POST_reindex.html",
          "title" : "POST Reindex",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_schedule-careplan-and-episode-of-care-stats.html"
            }
          ],
          "nameUrl" : "POST_schedule-careplan-and-episode-of-care-stats.html",
          "title" : "POST Schedule Careplan and Episode of Care Stats",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_schedule-careplan-customization-stats.html"
            }
          ],
          "nameUrl" : "POST_schedule-careplan-customization-stats.html",
          "title" : "POST Schedule Careplan Customization Stats",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_schedule-careplan-duration-stats.html"
            }
          ],
          "nameUrl" : "POST_schedule-careplan-duration-stats.html",
          "title" : "POST Schedule Careplan Duration Stats",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_schedule-careplans-by-patient.html"
            }
          ],
          "nameUrl" : "POST_schedule-careplans-by-patient.html",
          "title" : "POST Schedule Careplans by Patient",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_schedule-careteam-stats.html"
            }
          ],
          "nameUrl" : "POST_schedule-careteam-stats.html",
          "title" : "POST Schedule Careteam Stats",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_schedule-measurement-stats.html"
            }
          ],
          "nameUrl" : "POST_schedule-measurement-stats.html",
          "title" : "POST Schedule Measurement Stats",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_schedule-patient-devices.html"
            }
          ],
          "nameUrl" : "POST_schedule-patient-devices.html",
          "title" : "POST Schedule Patient Devices",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_schedule-patient-gdpr.html"
            }
          ],
          "nameUrl" : "POST_schedule-patient-gdpr.html",
          "title" : "POST Schedule Patient Gdpr",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_schedule-patient-total.html"
            }
          ],
          "nameUrl" : "POST_schedule-patient-total.html",
          "title" : "POST Schedule Patient Total",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_schedule-patient-usage-stats.html"
            }
          ],
          "nameUrl" : "POST_schedule-patient-usage-stats.html",
          "title" : "POST Schedule Patient Usage Stats",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_schedule-practitioner-gdpr.html"
            }
          ],
          "nameUrl" : "POST_schedule-practitioner-gdpr.html",
          "title" : "POST Schedule Practitioner Gdpr",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_schedule-practitioner-stats.html"
            }
          ],
          "nameUrl" : "POST_schedule-practitioner-stats.html",
          "title" : "POST Schedule Practitioner Stats",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_schedule-ssl-orders.html"
            }
          ],
          "nameUrl" : "POST_schedule-ssl-orders.html",
          "title" : "POST Schedule Ssl Orders",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_search-measurements.html"
            }
          ],
          "nameUrl" : "POST_search-measurements.html",
          "title" : "POST Search Measurements",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_search-measurements-bundle-limit.html"
            }
          ],
          "nameUrl" : "POST_search-measurements-bundle-limit.html",
          "title" : "POST Search Measurements Bundle Limit",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_submit-measurement.html"
            }
          ],
          "nameUrl" : "POST_submit-measurement.html",
          "title" : "POST Submit Measurement",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_transform-from-APD.html"
            }
          ],
          "nameUrl" : "POST_transform-from-APD.html",
          "title" : "POST Transform From APD",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_transform-from-PHMR.html"
            }
          ],
          "nameUrl" : "POST_transform-from-PHMR.html",
          "title" : "POST Transform From PHMR",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_transform-from-QFDD.html"
            }
          ],
          "nameUrl" : "POST_transform-from-QFDD.html",
          "title" : "POST Transform From QFDD",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_transform-from-QRD.html"
            }
          ],
          "nameUrl" : "POST_transform-from-QRD.html",
          "title" : "POST Transform From QRD",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_transform-from-QRD-based-on-questionnaire.html"
            }
          ],
          "nameUrl" : "POST_transform-from-QRD-based-on-questionnaire.html",
          "title" : "POST Transform From QRD Based on Questionnaire",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_transform-to-APD.html"
            }
          ],
          "nameUrl" : "POST_transform-to-APD.html",
          "title" : "POST Transform to APD",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_transform-to-PHMR.html"
            }
          ],
          "nameUrl" : "POST_transform-to-PHMR.html",
          "title" : "POST Transform to PHMR",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_transform-to-QFDD.html"
            }
          ],
          "nameUrl" : "POST_transform-to-QFDD.html",
          "title" : "POST Transform to QFDD",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_transform-to-QRD.html"
            }
          ],
          "nameUrl" : "POST_transform-to-QRD.html",
          "title" : "POST Transform to QRD",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "POST_upload-QFDD.html"
            }
          ],
          "nameUrl" : "POST_upload-QFDD.html",
          "title" : "POST Upload QFDD",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "profiles.html"
            }
          ],
          "nameUrl" : "profiles.html",
          "title" : "Profiles",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "search.html"
            }
          ],
          "nameUrl" : "search.html",
          "title" : "Search",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "searchparams.html"
            }
          ],
          "nameUrl" : "searchparams.html",
          "title" : "Searchparams",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "service-event-tables.html"
            }
          ],
          "nameUrl" : "service-event-tables.html",
          "title" : "Service Event Tables",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "systematic-error-messages.html"
            }
          ],
          "nameUrl" : "systematic-error-messages.html",
          "title" : "Systematic Error Messages",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "systematic-service-event-examples.html"
            }
          ],
          "nameUrl" : "systematic-service-event-examples.html",
          "title" : "Systematic Service Event Examples",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "systematic-service-event-tables.html"
            }
          ],
          "nameUrl" : "systematic-service-event-tables.html",
          "title" : "Systematic Service Event Tables",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "terminology.html"
            }
          ],
          "nameUrl" : "terminology.html",
          "title" : "Terminology",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "trifork-error-messages.html"
            }
          ],
          "nameUrl" : "trifork-error-messages.html",
          "title" : "Trifork Error Messages",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "trifork-service-event-examples.html"
            }
          ],
          "nameUrl" : "trifork-service-event-examples.html",
          "title" : "Trifork Service Event Examples",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "trifork-service-event-tables.html"
            }
          ],
          "nameUrl" : "trifork-service-event-tables.html",
          "title" : "Trifork Service Event Tables",
          "generation" : "markdown"
        }
      ]
    },
    "parameter" : [
      {
        "code" : "path-resource",
        "value" : "input/resources"
      },
      {
        "code" : "path-resource",
        "value" : "fsh-generated/resources"
      },
      {
        "code" : "path-pages",
        "value" : "input/includes"
      },
      {
        "code" : "path-resource",
        "value" : "input/capabilities"
      },
      {
        "code" : "path-resource",
        "value" : "input/examples"
      },
      {
        "code" : "path-resource",
        "value" : "input/extensions"
      },
      {
        "code" : "path-resource",
        "value" : "input/models"
      },
      {
        "code" : "path-resource",
        "value" : "input/operations"
      },
      {
        "code" : "path-resource",
        "value" : "input/profiles"
      },
      {
        "code" : "path-resource",
        "value" : "input/vocabulary"
      },
      {
        "code" : "path-resource",
        "value" : "input/testing"
      },
      {
        "code" : "path-resource",
        "value" : "input/history"
      },
      {
        "code" : "path-pages",
        "value" : "template/config"
      },
      {
        "code" : "path-pages",
        "value" : "input/images"
      },
      {
        "code" : "path-tx-cache",
        "value" : "input-cache/txcache"
      }
    ]
  }
}

```
