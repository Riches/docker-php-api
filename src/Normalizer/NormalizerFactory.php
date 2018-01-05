<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = [];
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new PortNormalizer();
        $normalizers[] = new MountPointNormalizer();
        $normalizers[] = new DeviceMappingNormalizer();
        $normalizers[] = new ThrottleDeviceNormalizer();
        $normalizers[] = new MountNormalizer();
        $normalizers[] = new MountBindOptionsNormalizer();
        $normalizers[] = new MountVolumeOptionsNormalizer();
        $normalizers[] = new MountVolumeOptionsDriverConfigNormalizer();
        $normalizers[] = new MountTmpfsOptionsNormalizer();
        $normalizers[] = new RestartPolicyNormalizer();
        $normalizers[] = new ResourcesNormalizer();
        $normalizers[] = new ResourcesBlkioWeightDeviceItemNormalizer();
        $normalizers[] = new ResourcesUlimitsItemNormalizer();
        $normalizers[] = new ResourceObjectNormalizer();
        $normalizers[] = new GenericResourcesItemNormalizer();
        $normalizers[] = new GenericResourcesItemNamedResourceSpecNormalizer();
        $normalizers[] = new GenericResourcesItemDiscreteResourceSpecNormalizer();
        $normalizers[] = new HealthConfigNormalizer();
        $normalizers[] = new HostConfigNormalizer();
        $normalizers[] = new HostConfigLogConfigNormalizer();
        $normalizers[] = new ContainerConfigNormalizer();
        $normalizers[] = new ContainerConfigVolumesNormalizer();
        $normalizers[] = new NetworkSettingsNormalizer();
        $normalizers[] = new AddressNormalizer();
        $normalizers[] = new PortBindingNormalizer();
        $normalizers[] = new GraphDriverDataNormalizer();
        $normalizers[] = new ImageNormalizer();
        $normalizers[] = new ImageRootFSNormalizer();
        $normalizers[] = new ImageMetadataNormalizer();
        $normalizers[] = new ImageSummaryNormalizer();
        $normalizers[] = new AuthConfigNormalizer();
        $normalizers[] = new ProcessConfigNormalizer();
        $normalizers[] = new VolumeNormalizer();
        $normalizers[] = new VolumeUsageDataNormalizer();
        $normalizers[] = new NetworkNormalizer();
        $normalizers[] = new IPAMNormalizer();
        $normalizers[] = new NetworkContainerNormalizer();
        $normalizers[] = new BuildInfoNormalizer();
        $normalizers[] = new CreateImageInfoNormalizer();
        $normalizers[] = new PushImageInfoNormalizer();
        $normalizers[] = new ErrorDetailNormalizer();
        $normalizers[] = new ProgressDetailNormalizer();
        $normalizers[] = new ErrorResponseNormalizer();
        $normalizers[] = new IdResponseNormalizer();
        $normalizers[] = new EndpointSettingsNormalizer();
        $normalizers[] = new EndpointIPAMConfigNormalizer();
        $normalizers[] = new PluginMountNormalizer();
        $normalizers[] = new PluginDeviceNormalizer();
        $normalizers[] = new PluginEnvNormalizer();
        $normalizers[] = new PluginInterfaceTypeNormalizer();
        $normalizers[] = new PluginNormalizer();
        $normalizers[] = new PluginSettingsNormalizer();
        $normalizers[] = new PluginConfigNormalizer();
        $normalizers[] = new PluginConfigInterfaceNormalizer();
        $normalizers[] = new PluginConfigUserNormalizer();
        $normalizers[] = new PluginConfigNetworkNormalizer();
        $normalizers[] = new PluginConfigLinuxNormalizer();
        $normalizers[] = new PluginConfigArgsNormalizer();
        $normalizers[] = new PluginConfigRootfsNormalizer();
        $normalizers[] = new ObjectVersionNormalizer();
        $normalizers[] = new NodeSpecNormalizer();
        $normalizers[] = new NodeNormalizer();
        $normalizers[] = new NodeDescriptionNormalizer();
        $normalizers[] = new PlatformNormalizer();
        $normalizers[] = new EngineDescriptionNormalizer();
        $normalizers[] = new EngineDescriptionPluginsItemNormalizer();
        $normalizers[] = new TLSInfoNormalizer();
        $normalizers[] = new NodeStatusNormalizer();
        $normalizers[] = new ManagerStatusNormalizer();
        $normalizers[] = new SwarmSpecNormalizer();
        $normalizers[] = new SwarmSpecOrchestrationNormalizer();
        $normalizers[] = new SwarmSpecRaftNormalizer();
        $normalizers[] = new SwarmSpecDispatcherNormalizer();
        $normalizers[] = new SwarmSpecCAConfigNormalizer();
        $normalizers[] = new SwarmSpecCAConfigExternalCAsItemNormalizer();
        $normalizers[] = new SwarmSpecEncryptionConfigNormalizer();
        $normalizers[] = new SwarmSpecTaskDefaultsNormalizer();
        $normalizers[] = new SwarmSpecTaskDefaultsLogDriverNormalizer();
        $normalizers[] = new ClusterInfoNormalizer();
        $normalizers[] = new JoinTokensNormalizer();
        $normalizers[] = new SwarmNormalizer();
        $normalizers[] = new TaskSpecNormalizer();
        $normalizers[] = new TaskSpecPluginSpecNormalizer();
        $normalizers[] = new TaskSpecPluginSpecPluginPrivilegeItemNormalizer();
        $normalizers[] = new TaskSpecContainerSpecNormalizer();
        $normalizers[] = new TaskSpecContainerSpecPrivilegesNormalizer();
        $normalizers[] = new TaskSpecContainerSpecPrivilegesCredentialSpecNormalizer();
        $normalizers[] = new TaskSpecContainerSpecPrivilegesSELinuxContextNormalizer();
        $normalizers[] = new TaskSpecContainerSpecDNSConfigNormalizer();
        $normalizers[] = new TaskSpecContainerSpecSecretsItemNormalizer();
        $normalizers[] = new TaskSpecContainerSpecSecretsItemFileNormalizer();
        $normalizers[] = new TaskSpecContainerSpecConfigsItemNormalizer();
        $normalizers[] = new TaskSpecContainerSpecConfigsItemFileNormalizer();
        $normalizers[] = new TaskSpecResourcesNormalizer();
        $normalizers[] = new TaskSpecRestartPolicyNormalizer();
        $normalizers[] = new TaskSpecPlacementNormalizer();
        $normalizers[] = new TaskSpecPlacementPreferencesItemNormalizer();
        $normalizers[] = new TaskSpecPlacementPreferencesItemSpreadNormalizer();
        $normalizers[] = new TaskSpecNetworksItemNormalizer();
        $normalizers[] = new TaskSpecLogDriverNormalizer();
        $normalizers[] = new TaskNormalizer();
        $normalizers[] = new TaskStatusNormalizer();
        $normalizers[] = new TaskStatusContainerStatusNormalizer();
        $normalizers[] = new ServiceSpecNormalizer();
        $normalizers[] = new ServiceSpecModeNormalizer();
        $normalizers[] = new ServiceSpecModeReplicatedNormalizer();
        $normalizers[] = new ServiceSpecUpdateConfigNormalizer();
        $normalizers[] = new ServiceSpecRollbackConfigNormalizer();
        $normalizers[] = new ServiceSpecNetworksItemNormalizer();
        $normalizers[] = new EndpointPortConfigNormalizer();
        $normalizers[] = new EndpointSpecNormalizer();
        $normalizers[] = new ServiceNormalizer();
        $normalizers[] = new ServiceEndpointNormalizer();
        $normalizers[] = new ServiceEndpointVirtualIPsItemNormalizer();
        $normalizers[] = new ServiceUpdateStatusNormalizer();
        $normalizers[] = new ImageDeleteResponseItemNormalizer();
        $normalizers[] = new ServiceUpdateResponseNormalizer();
        $normalizers[] = new ContainerSummaryItemNormalizer();
        $normalizers[] = new ContainerSummaryItemHostConfigNormalizer();
        $normalizers[] = new ContainerSummaryItemNetworkSettingsNormalizer();
        $normalizers[] = new DriverNormalizer();
        $normalizers[] = new SecretSpecNormalizer();
        $normalizers[] = new SecretNormalizer();
        $normalizers[] = new ConfigSpecNormalizer();
        $normalizers[] = new ConfigNormalizer();
        $normalizers[] = new SystemInfoNormalizer();
        $normalizers[] = new PluginsInfoNormalizer();
        $normalizers[] = new RegistryServiceConfigNormalizer();
        $normalizers[] = new IndexInfoNormalizer();
        $normalizers[] = new RuntimeNormalizer();
        $normalizers[] = new CommitNormalizer();
        $normalizers[] = new SwarmInfoNormalizer();
        $normalizers[] = new PeerNodeNormalizer();
        $normalizers[] = new ContainersCreatePostBodyNormalizer();
        $normalizers[] = new ContainersCreatePostBodyNetworkingConfigNormalizer();
        $normalizers[] = new ContainersCreatePostResponse201Normalizer();
        $normalizers[] = new ContainersIdJsonGetResponse200Normalizer();
        $normalizers[] = new ContainersIdJsonGetResponse200StateNormalizer();
        $normalizers[] = new ContainersIdTopGetResponse200Normalizer();
        $normalizers[] = new ContainersIdChangesGetResponse200ItemNormalizer();
        $normalizers[] = new ContainersIdUpdatePostBodyNormalizer();
        $normalizers[] = new ContainersIdUpdatePostResponse200Normalizer();
        $normalizers[] = new ContainersIdWaitPostResponse200Normalizer();
        $normalizers[] = new ContainersIdWaitPostResponse200ErrorNormalizer();
        $normalizers[] = new ContainersIdArchiveGetResponse400Normalizer();
        $normalizers[] = new ContainersIdArchiveHeadResponse400Normalizer();
        $normalizers[] = new ContainersPrunePostResponse200Normalizer();
        $normalizers[] = new BuildPrunePostResponse200Normalizer();
        $normalizers[] = new ImagesNameHistoryGetResponse200ItemNormalizer();
        $normalizers[] = new ImagesSearchGetResponse200ItemNormalizer();
        $normalizers[] = new ImagesPrunePostResponse200Normalizer();
        $normalizers[] = new AuthPostResponse200Normalizer();
        $normalizers[] = new VersionGetResponse200Normalizer();
        $normalizers[] = new VersionGetResponse200PlatformNormalizer();
        $normalizers[] = new VersionGetResponse200ComponentsItemNormalizer();
        $normalizers[] = new EventsGetResponse200Normalizer();
        $normalizers[] = new EventsGetResponse200ActorNormalizer();
        $normalizers[] = new SystemDfGetResponse200Normalizer();
        $normalizers[] = new ContainersIdExecPostBodyNormalizer();
        $normalizers[] = new ExecIdStartPostBodyNormalizer();
        $normalizers[] = new ExecIdJsonGetResponse200Normalizer();
        $normalizers[] = new VolumesGetResponse200Normalizer();
        $normalizers[] = new VolumesCreatePostBodyNormalizer();
        $normalizers[] = new VolumesPrunePostResponse200Normalizer();
        $normalizers[] = new NetworksCreatePostBodyNormalizer();
        $normalizers[] = new NetworksCreatePostResponse201Normalizer();
        $normalizers[] = new NetworksIdConnectPostBodyNormalizer();
        $normalizers[] = new NetworksIdDisconnectPostBodyNormalizer();
        $normalizers[] = new NetworksPrunePostResponse200Normalizer();
        $normalizers[] = new PluginsPrivilegesGetResponse200ItemNormalizer();
        $normalizers[] = new PluginsPullPostBodyItemNormalizer();
        $normalizers[] = new PluginsNameUpgradePostBodyItemNormalizer();
        $normalizers[] = new SwarmInitPostBodyNormalizer();
        $normalizers[] = new SwarmJoinPostBodyNormalizer();
        $normalizers[] = new SwarmUnlockkeyGetResponse200Normalizer();
        $normalizers[] = new SwarmUnlockPostBodyNormalizer();
        $normalizers[] = new ServicesCreatePostBodyNormalizer();
        $normalizers[] = new ServicesCreatePostResponse201Normalizer();
        $normalizers[] = new ServicesIdUpdatePostBodyNormalizer();
        $normalizers[] = new SecretsCreatePostBodyNormalizer();
        $normalizers[] = new SecretsCreatePostResponse201Normalizer();
        $normalizers[] = new ConfigsCreatePostBodyNormalizer();
        $normalizers[] = new ConfigsCreatePostResponse201Normalizer();
        $normalizers[] = new DistributionNameJsonGetResponse200Normalizer();
        $normalizers[] = new DistributionNameJsonGetResponse200DescriptorNormalizer();
        $normalizers[] = new DistributionNameJsonGetResponse200PlatformsItemNormalizer();

        return $normalizers;
    }
}
